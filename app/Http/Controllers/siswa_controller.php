<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\siswa;

class siswa_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=siswa::all();
        return view('siswa',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = new siswa;
        $siswa->nama = $request->nama;
        $siswa->jurusan = $request->jurusan;
        $siswa->asal_sekolah = $request->asal;
        $siswa->alamat = $request->alamat;
        $siswa->tanggal_lahir = $request->tgl;
        $siswa->save();
        return redirect('/siswa');
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
    public function edit($id)
    {
       $value=siswa::find($id);
        return view('edit',compact('value'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $siswa = siswa::find($request->id);
        $siswa->nama=$request->nama;
        $siswa->jurusan=$request->jurusan;
        $siswa->asal_sekolah=$request->asal;
        $siswa->alamat=$request->alamat;
        $siswa->save();
        return redirect('/siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = siswa::find($id);
        $siswa->delete();
        return redirect('/siswa');
    }
}
