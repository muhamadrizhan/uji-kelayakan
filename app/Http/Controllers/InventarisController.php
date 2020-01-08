<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Inventaris;

class InventarisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_inventaris =  Inventaris::all();
        return view('inventaris.index',['data_inventaris' => $data_inventaris]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Inventaris::create($request->all());
         return redirect('/inventaris')->with('sukses','Data Berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_inventaris)
    {
        $inventaris = \App\Inventaris::find($id_inventaris);
        return view('inventaris/edit',['inventaris'=> $inventaris]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_inventaris)
    {
         $inventaris = \App\Inventaris::find($id_inventaris);
         $inventaris->update($request->all());
         return redirect('/inventaris')->with('sukses','Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_inventaris)
    {
        $inventaris = \App\Inventaris::find($id_inventaris);
        $inventaris->delete($inventaris);
        return redirect('/inventaris')->with('sukses','Data Berhasil di Hapus'); 
    }
}
