<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;

class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komentar = Komentar::with('Artikel')->get();
        return view('komentar.index',compact('komentar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('komentar.create');
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
            'artikel_id' => 'required',
            'komentar'=>'required'
        ]);
        $komentar = Komentar::create($request->all());
        return redirect()->route('komentars.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $komentar = Komentar::findOrFail($id);
        return view('komenta
        r.show',compact('komentar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kometar = Komentar::findOrFail($id);
        return view('komentar.edit',compact('komentar'));
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
        $this->validate($request, ['verifikasi_id' => 'required',
            'komentar'=>'required' 
        ]);
        $komentar = Komentar::find($id);
        $komentar->update($request->all());
        return redirect()->route('komentars.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Komentar::destroy($id);
        return redirect()->route('komentars.index');
    }
}
