<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\biyo;


class biyo_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biw=biyo::all();
        return view('biyo',compact('biw'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tambih');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'nama'  => 'required|max:10',
            'tempat' => 'required|max:10',
            'tgll' =>'required|date',
            'hobi' => 'string|max:50',
        ]);
        $biyo = new biyo;
        $biyo->nama = $request->nama;
        $biyo->tempat = $request->tempat;
        $biyo->tanggal_lahir = $request->tgll;
        $biyo->Hobby = $request->hobi;
        $biyo->file = $request->file;
        if ($request->hasFile('foto'))
    {
        $uploaded_cover = $request->file('foto');
        $extension = $uploaded_cover->getClientOriginalExtension();
        $filename= md5(time()) .'.'.$extension;
        $destinationPath = public_path().DIRECTORY_SEPARATOR.'img';
        $uploaded_cover->move($destinationPath, $filename);
        $biyo->foto = $filename;
    }

    if ($request->hasFile('file'))
    {
        $uploaded_cover = $request->file('file');
        $extension = $uploaded_cover->getClientOriginalExtension();
        $filename= md5(time()) .'.'.$extension;
        $destinationPath = public_path().DIRECTORY_SEPARATOR.'file';
        $uploaded_cover->move($destinationPath, $filename);
        $biyo->file = $filename;
    }
        $biyo->save();
        return redirect('/biyo');
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
        $value=biyo::find($id);
        return view('new',compact('value'));
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
        $biyo= biyo::find($request->id);
        $biyo->nama = $request->nama;
        $biyo->tempat = $request->tempat;
        $biyo->tanggal_lahir = $request->tgll;
        $biyo->Hobby = $request->hobi;
        $biyo->foto = $request->foto;
        $biyo->file = $request->file;
        if ($request->hasFile('foto'))
    {
        $uploaded_cover = $request->file('foto');
        $extension = $uploaded_cover->getClientOriginalExtension();
        $filename= md5(time()) .'.'.$extension;
        $destinationPath = public_path().DIRECTORY_SEPARATOR.'img';
        $uploaded_cover->move($destinationPath, $filename);
        $biyo->foto = $filename;
    }

    if ($request->hasFile('file'))
    {
        $uploaded_cover = $request->file('file');
        $extension = $uploaded_cover->getClientOriginalExtension();
        $filename= md5(time()) .'.'.$extension;
        $destinationPath = public_path().DIRECTORY_SEPARATOR.'file';
        $uploaded_cover->move($destinationPath, $filename);
        $biyo->file = $filename;
    }       
        $biyo->save();
        return redirect('/biyo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biyo = biyo::find($id);
        $biyo->delete();
        return redirect('/biyo');
    }
}
