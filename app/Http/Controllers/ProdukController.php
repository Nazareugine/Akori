<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Varian;
use App\Models\ViewProduk;
use Illuminate\Http\Request;

Use Session;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.produk.index',[
            'viewProduk' => ViewProduk::paginate(10),
            'kategori' => Kategori::all(),
            'varian' => Varian::all()
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
            'namaproduk' => 'required',
            'kategori_id' => 'required',
            'varian_id' => 'required',
            'harga' => 'required'
        ]);

        Produk::create([
            'namaproduk' => $request->namaproduk,
            'kategori_id' => $request->kategori_id,
            'varian_id' => $request->varian_id,
            'harga' => $request->harga
        ]);

        return redirect()->route('produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ViewProduk  $viewProduk
     * @return \Illuminate\Http\Response
     */
    public function show(ViewProduk $viewProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ViewProduk  $viewProduk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $produk = Produk::find($id);

        $kategori = Kategori::all();
        $varian = Varian::all();

        //
        return view('pages.produk.detail',[
            'produk' => $produk,
            'kategori' => $kategori,
            'varian' => $varian
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ViewProduk  $viewProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'namaproduk' => 'required',
            'kategori_id' => 'required',
            'varian_id' => 'required',
            'harga' => 'required'
        ]);

        Produk::find($id)->update([
            'namaproduk' => $request->namaproduk,
            'kategori_id' => $request->kategori_id,
            'varian_id' => $request->varian_id,
            'harga' => $request->harga
        ]);

        return redirect()->route('produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ViewProduk  $viewProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Varian::find($id)->delete();

        return redirect()->route('produk');
    }
}
