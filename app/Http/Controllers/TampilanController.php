<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artikel;
use App\Destinasi;
use App\Galeri;
use App\Komentar; 
use App\Role;
use App\User;
use Auth;
use Laratrust\LaratrustFacade as Laratrust;


class TampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $artikel= Artikel::orderBy('created_at','desc')->paginate(10);
        $user = User::All();
        return view('tampilan.index', compact('artikel','user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }
    public function destinasi()
    {
        $destinasi = Destinasi::all();
        //return view('tampilan.destinasi');
        return view('tampilan.destinasi', ['destinasi' => $destinasi]);
    }
     public function daftar($id)
    {
        $destinasi = Destinasi::findOrFail($id);
        return view('tampilan.daftar',compact('destinasi'));
    }  
    // public function biografi($id)
    // {
    //     $user = User::findOrFail($id);
    //     return view('tampilan.biografi',compact('user'));
    // }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('tampilan.show',compact('artikel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function search(Request $request){
        if($request->search == ""){
            $artikel = search::paginate(8);
        return view('tampilan.result',compact('artikel'));
        }else {
            $artikel = Artikel::where('judul_artikel', 'LIKE','%'.$request->search.'%')->paginate(8);
            $artikel->appends($request->only('search'));
            return view('tampilan.result',compact('artikel'));
        }
    }
}
