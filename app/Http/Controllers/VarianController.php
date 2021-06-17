<?php

namespace App\Http\Controllers;

use App\Models\Varian;
use Illuminate\Http\Request;

class VarianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.varian.index', [
            'varian' => Varian::paginate(10)
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
            'varian' => 'required'
        ]);

        Varian::create([
            'varian' => $request->varian
        ]);

        return redirect()->route('varian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Varian  $varian
     * @return \Illuminate\Http\Response
     */
    public function show(Varian $varian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Varian  $varian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $varian = Varian::find($id);

        return view('pages.varian.detail',[
            'varian' => $varian
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Varian  $varian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'varian' => 'required'
        ]);

        Varian::find($id)->update([
            'varian' => $request->varian
        ]);

        return redirect()->route('varian');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Varian  $varian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Varian::find($id)->delete();

        return redirect()->route('varian');
    }
}
