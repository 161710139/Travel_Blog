<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Destinasi;

class DestinasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destinasi = Artikel::all();
        return view('destinasi.index', compact('destinasi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('destinasi.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama_destinasi'=>'unique:destinasi|max:255|required'
        ]);
        $destinasi = new Destinasi;
        $destinasi->nama_destinasi = $request->nama_destinasi;
        $destinasi->save();
        Session::flash("flash_notification", [
            "level"=>"success",
            "message"=>"Berhasil menyimpan $destinasi->nama_destinasi"
            ]);
        return redirect()->route('destinasis.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        return view('destinasi.show',compact('destinasi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        return view('destinasi.edit',compact('destinasi'));
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
        $this->validate($request,[
            'nama_apparel'=>'max:255|required'
        ]);
        $destinasi = Destinasi::findOrFail($id);
        $destinasi->nama_destinasi = $request->nama_destinasi;
        $destinasi->save();
        return redirect()->route('destinasis.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        $destinasis->delete();
        return redirect()->route('destinasis.index');
    }
}
