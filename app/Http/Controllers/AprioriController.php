<?php

namespace App\Http\Controllers;

use App\Models\BahanProduk;
use App\Models\DetailTransaksi;
use App\Models\Produk;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ViewProdukTransaksi;
use Carbon\Carbon;
use PhpParser\Node\Expr\AssignOp\Concat;

class AprioriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $detailTransaksi = DetailTransaksi::select('detail_transaksi.id','transaksi_id','produk_id')->leftjoin('transaksi', 'detail_transaksi.transaksi_id', '=', 'transaksi.id');
        return view('pages.apriori.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $daterange = explode(" - ", $request->daterange);
        $startDate = $this->format_date_db($daterange[0]);
        $endDate = $this->format_date_db($daterange[1]);

        $minSupport = $request->minSupport;
        $minConfidence = $request->minConfidence;
        $proses = $request->proses;

        $request->validate([
            'daterange' => 'required',
            'proses' => 'required',
            'minSupport' => 'required',
            'minConfidence' => 'required'
        ]);

        if($proses=="bahan") {
            $data = $this->miningBahan(
                $startDate,
                $endDate,
                $minSupport,
                $minConfidence
            );
            if (count($data) == 4 ) {
                return view('pages.apriori.aprioribahan', [
                    'dataTransaksi' => $data[0],
                    'itemSet1' => $data[1],
                    'itemSet2' => $data[2],
                    'itemSet3' => 0,
                    'confidence' => $data[3]
                ]);
            } elseif (count($data) == 5 ) {
                return view('pages.apriori.aprioribahan', [
                    'dataTransaksi' => $data[0],
                    'itemSet1' => $data[1],
                    'itemSet2' => $data[2],
                    'itemSet3' => $data[3],
                    'confidence' => $data[4]
                ]);
            }
        } elseif ($proses=="produk") {
            $data = $this->miningProduk(
                $startDate,
                $endDate,
                $minSupport,
                $minConfidence
            );
            //dd($data);
            if (count($data) == 4 ) {
                return view('pages.apriori.aprioriproduk', [
                    'dataTransaksi' => $data[0],
                    'itemSet1' => $data[1],
                    'itemSet2' => $data[2],
                    'itemSet3' => 0,
                    'confidence' => $data[3]
                ]);
            } elseif (count($data) == 5 ) {
                return view('pages.apriori.aprioriproduk', [
                    'dataTransaksi' => $data[0],
                    'itemSet1' => $data[1],
                    'itemSet2' => $data[2],
                    'itemSet3' => $data[3],
                    'confidence' => $data[4]
                ]);
            }
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Apriori  $apriori
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Apriori  $apriori
     * @return \Illuminate\Http\Response
     */
    public function edit(Apriori $apriori)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Apriori  $apriori
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Apriori $apriori)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Apriori  $apriori
     * @return \Illuminate\Http\Response
     */
    public function destroy(Apriori $apriori)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function miningProduk($startDate, $endDate, $minSupport, $minConfidence)
    {
        //
        $dataTransaksi = array();

        $transaksi = Transaksi::select('id','date')->whereBetween('date', [$startDate, $endDate])->get()->toArray();

        $detran = DetailTransaksi::join('transaksi',
        'transaksi.id','=','detail_transaksi.transaksi_id')->join('produk','produk.id','=','detail_transaksi.produk_id')->join('varian','varian.id','=','produk.varian_id')
        ->select('detail_transaksi.transaksi_id',
        'detail_transaksi.produk_id',
        DB::raw('CONCAT(varian, " ", namaproduk) as produk'))->orderBy('transaksi_id')
        ->whereBetween('date', [$startDate, $endDate])
        ->get()->toArray();

        $jumlahTransaksi = count($transaksi);
        $countProduk = array_count_values(array_column($detran,'produk'));
        $x=0;

        //
        foreach ($transaksi as $item) {
            $dataTransaksi[$x]['id'] = $item['id'];
            $dataTransaksi[$x]['date'] = $item['date'];
            foreach ($detran as $produk) {
                $i = 0;
                if($item['id']==$produk['transaksi_id']) {
                    if(empty($dataTransaksi[$x]['produk'])) {
                        $dataTransaksi[$x]['produk'] = $produk['produk'];
                    } elseif(!empty($dataTransaksi[$x]['produk'])) {
                        $dataTransaksi[$x]['produk'] = $dataTransaksi[$x]['produk'].", ".$produk['produk'];
                    }
                    $i++;
                }
            }
            $x++;
        }

        //membuat itemset1
        $itemSet1 = array();
        foreach ($countProduk as $value => $key) {
            $support = ($key/$jumlahTransaksi) * 100;
            $lolos = ($support>=$minSupport)?1:0;
            if($lolos) {
                $itemSet1[$x]['produk'] = $value;
                $itemSet1[$x]['jumlah'] = $key;
                $itemSet1[$x]['support'] = $support;
            }
            $x++;
        }

        //membuat itemset2
        $itemSet2 = array();
        foreach ($itemSet1 as $produk1) {
            foreach ($itemSet1 as $produk2) {
                $i=0;
                $variance1 = $produk1['produk'];
                $variance2 = $produk2['produk'];
                if (!empty($variance1) && !empty($variance2)) {
                    if ($variance1 != $variance2) {
                        $jumlah = $this->count_itemset2_produk($dataTransaksi, $variance1, $variance2);
                        $support = ($jumlah/$jumlahTransaksi) * 100;
                        $lolos = ($support >= $minSupport)?1:0;
                        if($lolos) {
                            $itemSet2[$x]['variasi1'] = $variance1;
                            $itemSet2[$x]['variasi2'] = $variance2;
                            $itemSet2[$x]['jumlah'] = $jumlah;
                            $itemSet2[$x]['support'] = $support;
                        }
                    }
                }
                $x++;
            }
        }

        //membuat itemset3
        $itemSet3 = array();
        foreach ($itemSet1 as $produk1) {
            foreach ($itemSet1 as $produk2) {
                foreach ($itemSet1 as $produk3) {
                    $variance1 = $produk1['produk'];
                    $variance2 = $produk2['produk'];
                    $variance3 = $produk3['produk'];
                    if (!empty($variance1) && !empty($variance2) && !empty($variance3)) {
                        if ($variance1 != $variance2 && $variance1 != $variance3 && $variance2 != $variance3) {
                            $jumlah = $this->count_itemset3_produk($dataTransaksi, $variance1, $variance2, $variance3);
                            $support = ($jumlah/$jumlahTransaksi) * 100;
                            $lolos = ($support >= $minSupport)?1:0;
                            if($lolos) {
                                $itemSet3[$x]['variasi1'] = $variance1;
                                $itemSet3[$x]['variasi2'] = $variance2;
                                $itemSet3[$x]['variasi3'] = $variance3;
                                $itemSet3[$x]['jumlah'] = $jumlah;
                                $itemSet3[$x]['support'] = $support;
                            }
                        }
                    }
                }
                $x++;
            }
        }

        //
        $confidence = array();
        if (count($itemSet3) > 0) {
            foreach ($itemSet3 as $item) {
                foreach ($countProduk as $value => $key) {
                    if ($item['variasi1']==$value) {
                        $jumlahA=$key;
                    }
                }

                $confi = $this->
                count_confidence($item['jumlah'],
                $jumlahA);

                    $confidence[$x]['variasi1']= $item['variasi1'];
                    $confidence[$x]['variasi2'] = $item['variasi2'];
                    $confidence[$x]['variasi3'] = $item['variasi3'];
                    $confidence[$x]['confidence'] = $confi;

                if ($confi >= $minConfidence) {

                }
            }
        } elseif (count($itemSet2) > 0) {
            foreach ($itemSet2 as $item) {
                foreach ($countProduk as $value => $key) {
                    if ($item['variasi1']==$value) {
                        $jumlahA=$key;
                    }
                }
                $confi = $this->
                count_confidence($item['jumlah'],
                $jumlahA);

                if ($confi >= $minConfidence) {
                    $confidence[$x]['variasi1']= $item['variasi1'];
                    $confidence[$x]['variasi2'] = $item['variasi2'];
                    $confidence[$x]['confidence'] = $confi;
                }

                $x++;
            }
        }

        if (count($itemSet3) > 0 ) {
            //dd($dataTransaksi, $itemSet1, $itemSet2, $itemSet3, $confidence);
            return [$dataTransaksi, $itemSet1, $itemSet2, $itemSet3, $confidence];
        } elseif (count($itemSet2) > 0) {
            //dd($dataTransaksi, $itemSet1, $itemSet2, $confidence);
            return [$dataTransaksi, $itemSet1, $itemSet2, $confidence];
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function miningBahan($startDate, $endDate, $minSupport, $minConfidence)
    {
        //
        $dataTransaksi = array();

        $transaksi = Transaksi::select('id','date')->whereBetween('date', [$startDate, $endDate])->get()->toArray();

        $detran = DetailTransaksi::join('transaksi',
        'transaksi.id','=','detail_transaksi.transaksi_id')->join('produk','produk.id','=','detail_transaksi.produk_id')->join('varian','varian.id','=','produk.varian_id')
        ->select('detail_transaksi.transaksi_id',
        'detail_transaksi.produk_id',
        DB::raw('CONCAT(varian, " ", namaproduk) as produk'))->orderBy('transaksi_id')
        ->whereBetween('date', [$startDate, $endDate])
        ->get()->toArray();

        $bahanProduk = BahanProduk::join('bahan','bahan.id','=','bahan_produk.bahan_id')->join('produk','produk.id','=','bahan_produk.produk_id')->join('varian','varian.id','=','produk.varian_id')
        ->select(DB::raw('CONCAT(varian, " ", namaproduk) as produk'), 'namabahan as bahan')
        ->get()->toArray();

        $jumlahTransaksi = count($transaksi);
        $countProduk = array_count_values(array_column($detran,'produk'));
        $x=0;

        foreach ($detran as $item) {
            foreach ($bahanProduk as $bahan) {
                if($item['produk']==$bahan['produk']) {
                    $detranbahan[$x]['transaksi_id'] = $item['transaksi_id'];
                    $detranbahan[$x]['produk_id'] = $item['produk_id'];
                    $detranbahan[$x]['bahan'] = $bahan['bahan'];
                }
                $x++;
            }
        }

        $countBahan = array_count_values(array_column($detranbahan,'bahan'));

        foreach ($transaksi as $item) {
            $dataTransaksi[$x]['id'] = $item['id'];
            $dataTransaksi[$x]['date'] = $item['date'];
            foreach ($detran as $produk) {
                foreach ($bahanProduk as $bahan) {
                    if($item['id']==$produk['transaksi_id']) {
                        if($produk['produk']==$bahan['produk']) {
                            if(empty($dataTransaksi[$x]['bahan'])) {
                                $dataTransaksi[$x]['bahan'] = $bahan['bahan'];
                            } elseif(!empty($dataTransaksi[$x]['bahan'])) {
                                $dataTransaksi[$x]['bahan'] = $dataTransaksi[$x]['bahan'].", ".$bahan['bahan'];
                            }
                        }
                    }
                }
            }
            $x++;
        }

        //membuat itemset1
        $itemSet1 = array();
        foreach ($countBahan as $value => $key) {
            $support = ($key/$jumlahTransaksi) * 100;
            $lolos = ($support>=$minSupport)?1:0;
            if($lolos) {
                $itemSet1[$x]['bahan'] = $value;
                $itemSet1[$x]['jumlah'] = $key;
                $itemSet1[$x]['support'] = $support;
            }
            $x++;
        }

        //membuat itemset2
        $itemSet2 = array();
        foreach ($itemSet1 as $bahan1) {
            foreach ($itemSet1 as $bahan2) {
                $i=0;
                $variance1 = $bahan1['bahan'];
                $variance2 = $bahan2['bahan'];
                if (!empty($variance1) && !empty($variance2)) {
                    if ($variance1 != $variance2) {
                        $jumlah = $this->count_itemset2_bahan($dataTransaksi, $variance1, $variance2);
                        $support = ($jumlah/$jumlahTransaksi) * 100;
                        $lolos = ($support >= $minSupport)?1:0;
                        if($lolos) {
                            $itemSet2[$x]['variasi1'] = $variance1;
                            $itemSet2[$x]['variasi2'] = $variance2;
                            $itemSet2[$x]['jumlah'] = $jumlah;
                            $itemSet2[$x]['support'] = $support;
                        }
                    }
                }
                $x++;
            }
        }

        //membuat itemset3
        $itemSet3 = array();
        foreach ($itemSet1 as $bahan1) {
            foreach ($itemSet1 as $bahan2) {
                foreach ($itemSet1 as $bahan3) {
                    $variance1 = $bahan1['bahan'];
                    $variance2 = $bahan2['bahan'];
                    $variance3 = $bahan3['bahan'];
                    if (!empty($variance1) && !empty($variance2) && !empty($variance3)) {
                        if ($variance1 != $variance2 && $variance1 != $variance3 && $variance2 != $variance3) {
                            $jumlah = $this->count_itemset3_bahan($dataTransaksi, $variance1, $variance2, $variance3);
                            $support = ($jumlah/$jumlahTransaksi) * 100;
                            $lolos = ($support >= $minSupport)?1:0;
                            if($lolos) {
                                $itemSet3[$x]['variasi1'] = $variance1;
                                $itemSet3[$x]['variasi2'] = $variance2;
                                $itemSet3[$x]['variasi3'] = $variance3;
                                $itemSet3[$x]['jumlah'] = $jumlah;
                                $itemSet3[$x]['support'] = $support;
                            }
                        }
                    }
                }
                $x++;
            }
        }

        //
        $confidence = array();
        if (count($itemSet3) > 0) {
            foreach ($itemSet3 as $item) {
                foreach ($countBahan as $value => $key) {
                    if ($item['variasi1']==$value) {
                        $jumlahA=$key;
                    }
                }

                $confi = $this->count_confidence($item['jumlah'],
                $jumlahA);

                if ($confi >= $minConfidence) {
                    $confidence[$x]['variasi1']= $item['variasi1'];
                    $confidence[$x]['variasi2'] = $item['variasi2'];
                    $confidence[$x]['variasi3'] = $item['variasi3'];
                    $confidence[$x]['confidence'] = $confi;
                }

                $x++;
            }
        } elseif (count($itemSet2) > 0) {
            foreach ($itemSet2 as $item) {
                foreach ($countBahan as $value => $key) {
                    if ($item['variasi1']==$value) {
                        $jumlahA=$key;
                    }
                }
                $confi = $this->count_confidence($item['jumlah'],
                $jumlahA);

                if ($confi >= $minConfidence) {
                    $confidence[$x]['variasi1']= $item['variasi1'];
                    $confidence[$x]['variasi2'] = $item['variasi2'];
                    $confidence[$x]['confidence'] = $confi;
                }

                $x++;
            }
        }

        if (count($itemSet3) > 0 ) {
            //dd($dataTransaksi, $itemSet1, $itemSet2, $itemSet3, $confidence);
            return [$dataTransaksi, $itemSet1, $itemSet2, $itemSet3, $confidence];
        } elseif (count($itemSet2) > 0) {
            //dd($dataTransaksi, $itemSet1, $itemSet2, $confidence);
            return [$dataTransaksi, $itemSet1, $itemSet2, $confidence];
        }

    }

    private function format_date_db($date){
        $date_ex = explode("/", $date);
        return $date_ex[2]."-".$date_ex[1]."-".$date_ex[0];
    }

    private function price_format($value) {
        return number_format($value, 2, ',', '.');
    }

    private function count_itemset2_produk($dataTransaksi, $variance1, $variance2) {
        $count = 0;
        foreach ($dataTransaksi as $data) {
            $produk = $data['produk'];
            $itemVariance1 = $variance1;
            $itemVariance2 = $variance2;

            $pos1 = strpos($produk, $itemVariance1);
            $pos2 = strpos($produk, $itemVariance2);
            if($pos1!==false && $pos2!==false) {
                $count++;
            }
        }
        return $count;
    }

    private function count_itemset3_produk($dataTransaksi, $variance1, $variance2, $variance3) {
        $count = 0;
        foreach ($dataTransaksi as $data) {
            $produk = $data['produk'];
            $itemVariance1 = $variance1;
            $itemVariance2 = $variance2;
            $itemVariance3 = $variance3;

            $pos1 = strpos($produk, $itemVariance1);
            $pos2 = strpos($produk, $itemVariance2);
            $pos3 = strpos($produk, $itemVariance3);
            if($pos1!==false && $pos2!==false && $pos3!==false) {
                $count++;
            }
        }
        return $count;
    }

    private function count_itemset2_bahan($dataTransaksi, $variance1, $variance2) {
        $count = 0;
        foreach ($dataTransaksi as $data) {
            $bahan = $data['bahan'];
            $itemVariance1 = $variance1;
            $itemVariance2 = $variance2;

            $pos1 = strpos($bahan, $itemVariance1);
            $pos2 = strpos($bahan, $itemVariance2);
            if($pos1!==false && $pos2!==false) {
                $count++;
            }
        }
        return $count;
    }

    private function count_itemset3_bahan($dataTransaksi, $variance1, $variance2, $variance3) {
        $count = 0;
        foreach ($dataTransaksi as $data) {
            $bahan = $data['bahan'];
            $itemVariance1 = $variance1;
            $itemVariance2 = $variance2;
            $itemVariance3 = $variance3;

            $pos1 = strpos($bahan, $itemVariance1);
            $pos2 = strpos($bahan, $itemVariance2);
            $pos3 = strpos($bahan, $itemVariance3);
            if($pos1!==false && $pos2!==false && $pos3!==false) {
                $count++;
            }
        }
        return $count;
    }

    private function count_confidence($jumlahAUB, $jumlahA) {
        return $jumlahAUB/$jumlahA * 100;
    }
}
