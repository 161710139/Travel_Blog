<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Verifikasi;
use App\Destinasi;

class VerifikasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verifikasi = Verifikasi::all();
        return view('verifikasi.index',compact('verifikasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $destinasi = Destinasi::all();
        return view('verifikasi.create',compact('destinasi'));
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
            'penulis'=>'max:255|required',
            'destinasi_id'=>'max:255|required'
        ]);
        $verifikasi = Verifikasi::create($request->all());
        return redirect()->route('verifikasis.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $verifikasi = Verifikasi::findOrFail($id);
        return view('verifikasi.show',compact('verifikasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $verifikasi = verifikasi::findOrFail($id);
        return view('verifikasi.edit',compact('verifikasi'));
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
            'penulis'=>'max:255|required',
            'destinasi'=>'max:255|required'
        ]);
        $verifikasi = Verifikasi::find($id);
        $verifikasi->update($request->all());
        return redirect()->route('verifikasis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $verifikasi = Verifikasi::findOrFail($id);
        $verifikasi->delete();
        return redirect()->route('verifikasis.index');
    }
}
