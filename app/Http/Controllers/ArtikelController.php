<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Destinasi;
use App\User;
use Auth;
use Laratrust\LaratrustFacade as Laratrust;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(Artikel $artikel)
    {
        $artikel = Artikel::orderBy('created_at','desc')->paginate(8);
        if(Laratrust::hasRole('super_admin')){
            return view('artikel.index',compact('artikel'));
        }
        else if(Laratrust::hasRole('member')){
            $artikel = Auth::user()->Artikel()->paginate(10);
            $jumlah_data = count($artikel['Artikel']);
            return view('member.artikel.index', compact('artikel', 'jumlah_data'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinasi = Destinasi::all();
        $artikel = Artikel::all();
        $user = User::all();
        if(Laratrust::hasRole('super_admin')){
            return view('artikel.create',compact('destinasi','artikel','user'));
        }
        else if(Laratrust::hasRole('member')){
            $artikel = Auth::user()->Artikel()->paginate(10);
            $jumlah_data = count($artikel['Artikel']);
            return view('member.artikel.create', compact('destinasi','artikel', 'jumlah_data','user'));
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
        $this->validate($request, [
            'foto'=>'image|max:20048',
            'judul_artikel' => 'required',
            'isi_artikel'=>'min:4|required',
            'user_id'=>'max:255|required',
            'destinasi_id'=>'max:255|required'
        ]);
        $artikel = Artikel::create($request->except('foto'));
        if ($request->hasFile('foto')) {
        $uploaded_foto = $request->file('foto');
        $extension = $uploaded_foto->getClientOriginalExtension();
        $filename = md5(time()) . '.' . $extension;
        $destinationPath = public_path() . DIRECTORY_SEPARATOR . 'img';
        $uploaded_foto->move($destinationPath, $filename);
        $artikel->foto = $filename;
        $artikel->save();
        }
        return redirect()->route('creategaleri', $artikel->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikel = Artikel::findOrFail($id);
        return view('artikel.show',compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Artikel $artikel)
    {
        if(Laratrust::hasRole('super_admin')){
            $artikel = Artikel::findOrFail($artikel->id);
            $destinasi = Destinasi::all();
            $destinasiselect = Artikel::findOrFail($artikel->id)->destinasi_id;
            return view('artikel.edit',compact('artikel','destinasi','destinasiselect'));
        }
        else if(Laratrust::hasRole('member')){
            $artikel = Artikel::findOrFail($artikel->id);
            $destinasi = Destinasi::all();
            $destinasiselect = Artikel::findOrFail($artikel->id)->destinasi_id;
            return view('member.artikel.edit', compact('artikel','destinasi','destinasiselect'));
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
            'foto'=>'image|max:20048',
            'judul_artikel' => 'required',
            'isi_artikel'=>'min:4|required',
            'user_id'=>'max:255|required',
            'destinasi_id'=>'max:255|required'
        ]);
        $artikel = Artikel::find($id);
        $artikel->update($request->except('user_id'));
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
        // mengisi field foto di artikel dengan filename yang baru dibuat
        $artikel->foto = $filename;
        $artikel->save();
        }
        return redirect()->route('artikels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Artikel $artikel)
    {
        $artikel =Artikel::destroy($artikel->id);
        if(Laratrust::hasRole('super_admin'))
        {
            return redirect()->route('artikels.index');    
        }
        else if(Laratrust::hasRole('member'))
        {
            return redirect()->route('artikels.index');
        }
        
    }
     public function Publish($id)
    {
        $artikel = Artikel::find($id);

        if ($artikel->status === 1) {
            $artikel->status = 0;
        } else {
            $artikel->status= 1;
        }

        $artikel->save();
        return redirect()->route('artikels.index');
    }
}
