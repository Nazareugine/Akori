<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaksi;
use App\Models\Produk;
use App\Models\User;
use App\Models\Transaksi;
use App\Models\ViewProdukTransaksi;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.transaksi.index', [
            'transaksi' => Transaksi::paginate(10),
            'menu' => ViewProdukTransaksi::all(),
            'user' => User::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        $this->validate($request, [
            'produk' => 'required',
            'harga' => 'required',
            'jumlah' => 'required',
            'total' => 'required'
        ]);

        Transaksi::create([
            'kodetransaksi' => "NULL",
            'total' => $request->total,
            'date' => Carbon::now()->toDateString(),
            'time' => Carbon::now()->toTimeString(),
            'user_id' => $user->id,
            'created_at' => now(+8),
            'updated_at' => now(+8),
        ]);

        DetailTransaksi::create([
            'transaksi_id' => DB::table('transaksi')->latest()->first(),
            'produk_id' => $request->produk,
            'harga' => Produk::find($request->produk)->select('harga'),
            'jumlah' => $request->jumlah,
            'created_at' => now(+8),
            'updated_at' => now(+8)
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi)
    {
        //
    }
}
