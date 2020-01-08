<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jenis;

class JenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_jenis =  Jenis::all();
        return view('jenis.index',['data_jenis' => $data_jenis]);
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
        Jenis::create($request->all());
         return redirect('/jenis')->with('sukses','Data Berhasil diinput');
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
    public function edit($id_jenis)
    {
        $jenis = \App\Jenis::find($id_jenis);
        return view('jenis/edit',['jenis'=> $jenis]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_jenis)
    {
         $jenis = \App\Jenis::find($id_jenis);
         $jenis->update($request->all());
         return redirect('/jenis')->with('sukses','Data Berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id_jenis)
    {
        $jenis = \App\Jenis::find($id_jenis);
        $jenis->delete($jenis);
        return redirect('/jenis')->with('sukses','Data Berhasil di Hapus'); 
    }
}
