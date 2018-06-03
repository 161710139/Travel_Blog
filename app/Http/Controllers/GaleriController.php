<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::with('Verifikasi')->get();
        return view('galeri.index',compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
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
            'gambar' => 'image|max:20048'
        ]);
        $galeri = Galeri::create($request->except('gambar'));
        if ($request->hasFile('gambar')) {
        $uploaded_logo = $request->file('gambar');
        $extension = $uploaded_logo->getClientOriginalExtension();
        $filename = md5(time()) . '.' . $extension;
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_logo->move($destinationPath, $filename);
        $galeri->gambar = $filename;
        $galeri->save();
        }
        return redirect()->route('galeris.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('galeri.show',compact('galeri'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $galeri = Galeri::findOrFail($id);
        return view('galeri.edit',compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'gambar' => 'image|max:20048',
        ]);
        $galeri = Galeri::find($id);
        $galeri -> update($request->all());
        // isi field gambar jika ada gambar yang diupload
        if ($request->hasFile('gambar')) {
        // Mengambil file yang diupload
        $uploaded_logo = $request->file('gambar');
        // mengambil extension file
        $extension = $uploaded_logo->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename = md5(time()) . '.' . $extension;
        // menyimpan gambar ke folder public/img
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_logo->move($destinationPath, $filename);
        // mengisi field gambar di Galeri dengan filename yang baru dibuat
        $galeri->gambar = $filename;
        $galeri->save();
        }
        Session::flash("flash_notification", [
        "level"=>"success",
        "message"=>"Berhasil menyimpan $barang->type"
        ]);
        return redirect()->route('galeris.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!Galeri::destroy($id)) return redirect()->back();
    }
}
