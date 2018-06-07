<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Destinasi;
use App\User;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikel = Artikel::with('Destinasi')->get();
        return view('artikel.index',compact('artikel'));
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
        return view('artikel.create',compact('destinasi','artikel','user'));
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
            'judul_artikel' => 'required',
            'isi_artikel'=>'min:4|required',
            'user_id'=>'max:255|required',
            'destinasi_id'=>'max:255|required'
        ]);
        $artikel = Artikel::create($request->all());
        return redirect()->route('artikels.index');
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
        $artikel = Artikel::findOrFail($artikel->id);
        $destinasi = Destinasi::all();
        $destinasiselect = Artikel::findOrFail($artikel->id)->destinasi_id; 
        return view('artikel.edit',compact('artikel','destinasi','destinasiselect'));
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
            'judul_artikel' => 'required',
            'isi_artikel'=>'min:4|required',
            'user_id'=>'max:255|required',
            'destinasi_id'=>'max:255|required'
        ]);
        $artikel = Artikel::find($id);
        $artikel->update($request->except('user_id'));
        return redirect()->route('artikels.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikel =Artikel::findOrFail($id);
        $artikel->delete();
        return redirect()->route('artikels.index');
    }
}
