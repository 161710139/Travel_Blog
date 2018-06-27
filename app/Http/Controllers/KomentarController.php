<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;
use App\User;
use App\Artikel;
use Auth;
class KomentarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $komentar = Komentar::all();
        return view('komentar.index',compact('komentar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Artikel $artikel , $artikel_id)
    {
        // $this->validate($request, [
        //     'user_id'=>'required',
        //     'artikel_id' => 'required',
        //     'komentar'=>'required|min:5|max:200'
        // ]);
        // $komentar =  Komentar::create($request->all());
        Komentar::create([
            'artikel_id'=> $request->artikel_id,
            'user_id'=>  Auth::user()->id ,
            'komentar'=> $request->komentar,
        ]);
         return redirect()->back();
        // $artikel = Artikel::find($artikel_id);
        // $komentar = new Komentar();
        // $komentar->user_id = $request->user_id;
        // $komentar->komentar = $request->komentar;
        // $komentar = Artikel()->associate($artikel);
        // $komentar->save();
        // Session::flash('success','Komentar telah ditambahkan');
        // return redirect()->route('show');
        //dd(request('komentar'));
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
        return view('komentar.show',compact('komentar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $komentar = Komentar::findOrFail($id);
        $artikel = Artikel::all();
        $artikelselect = Artikel::findOrFail($id)->destinasi_id; 
        $user = User::all();
        $userselect = User::findOrFail($id)->user_id;
        return view('komentar.edit',compact('komentar','artikel','artikelselect','user','userselect'));
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
            'user_id'=>'required',
            'artikel_id' => 'required',
            'komentar'=>'required|min:5' 
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
        $komentar = Komentar::findOrFail($id);
        $komentar->delete();
        return redirect()->route('komentars.index');
    }
}
