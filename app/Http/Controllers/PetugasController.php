<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Petugas;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_petugas =  Petugas::all();
        return view('petugas.index',['data_petugas' => $data_petugas]);
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
        Petugas::create($request->all());
         return redirect('/petugas')->with('sukses','Data Berhasil diinput');
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
    public function edit($id_petugas)
    {
        $petugas = \App\Petugas::find($id_petugas);
        return view('petugas/edit',['petugas'=> $petugas]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_petugas)
    {
         $petugas = \App\Petugas::find($id_petugas);
         $petugas->update($request->all());
         return redirect('/petugas')->with('sukses','Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_petugas)
    {
        $petugas = \App\Petugas::find($id_petugas);
        $petugas->delete($petugas);
        return redirect('/petugas')->with('sukses','Data Berhasil di Hapus'); 
    }
}
