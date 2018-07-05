<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = array('foto','judul_artikel','isi_artikel','status','user_id','destinasi_id');
    public $timestamps = true;
    public function Destinasi(){
        return $this->belongsTo('App\Destinasi','destinasi_id');
    }
    public function Galeri(){
    	return $this->hasMany('App\Galeri','artikel_id');
    }
    public function User(){
   	return $this->belongsTo('App\User' , 'user_id');
    }
    public function Komentar(){
    	return $this->hasMany('App\Komentar','artikel_id');
    }
}
