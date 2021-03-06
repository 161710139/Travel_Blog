<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\Artikel;
use Illuminate\Support\Facades\Session;
use Laratrust\LaratrustFacade as Laratrust;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::all();
        if(Laratrust::hasRole('super_admin')){
            return view('galeri.index',compact('galeri'));
        }
        else if(Laratrust::hasRole('member')){
             return view('member.galeri.index',compact('galeri'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {   
        $artikel = Artikel::findOrFail($id);
        $galeri = Galeri::All();
        if(Laratrust::hasRole('super_admin')){
            return view('galeri.create',compact('artikel','galeri'));
        }
        else if(Laratrust::hasRole('member')){
            return view('member.galeri.create',compact('artikel','galeri'));
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
        if ($request->hasFile('foto')) {
            foreach ($request->foto as $foto) {
                // $uploaded_foto = $request->file('foto');
                // $extension = $uploaded_foto->getClientOriginalExtension();
                // $filename = md5(time()) . '.' . $extension;
                $filename = $foto->getClientOriginalName();
                $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
                $foto->move($destinationPath, $filename);
                $galeri = Galeri::create($request->except('foto'));
                $galeri->foto = $filename;
                $galeri->save();
                // $filename = $foto->getClientOriginalName();
                // $foto->storeAs('public/img',$filename);
                // $galeri->foto = $filename;
                // $galeri->save();
            }
        }
        // $this->validate($request, [
        //     'foto' => 'image|max:20048',
        //     'artikel_id'=> 'required'
        // ]);
        // foreach ($request->image as $foto) {
        // $galeri = Galeri::create($request->except('foto'));
        // if ($request->hasFile('foto')) {
        // $uploaded_foto = $request->file('foto');
        // $extension = $uploaded_foto->getClientOriginalExtension();
        // $filename = md5(time()) . '.' . $extension;
        // $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        // $uploaded_foto->move($destinationPath, $filename);
        // $galeri->foto = $filename;
        // $galeri->save();
        // }     
        return redirect()->back();
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
    public function edit(Galeri $galeri)
    {       
        $galeri = Galeri::findOrFail($galeri->id);
        $artikel = Artikel::all();
        $artikelselect= Galeri::findOrFail($galeri->id)->artikel_id; 
        if(Laratrust::hasRole('super_admin')){
            return view('galeri.edit',compact('galeri','artikel','artikelselect'));
        }
        else if(Laratrust::hasRole('member')){
             return view('member.galeri.edit',compact('galeri','artikel','artikelselect'));
        }
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
            'foto' => 'image|max:20048',
            'artikel_id'=>'required'
        ]);
        $galeri = Galeri::find($id);
        $galeri -> update($request->all());
        // isi field gambar jika ada gambar yang diupload
        if ($request->hasFile('foto')) {
        // Mengambil file yang diupload
        $uploaded_logo = $request->file('foto');
        // mengambil extension file
        $extension = $uploaded_logo->getClientOriginalExtension();
        // membuat nama file random berikut extension
        $filename = md5(time()) . '.' . $extension;
        // menyimpan foto ke folder public/img
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_logo->move($destinationPath, $filename);
        // mengisi field foto di Galeri dengan filename yang baru dibuat
        $galeri->foto = $filename;
        $galeri->save();
        }
        return redirect()->route('galeri.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $galeri = Galeri::findOrFail($id);
        $galeri->delete();
        return redirect()->back();
    }
}
