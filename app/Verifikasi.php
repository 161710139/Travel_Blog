<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Verifikasi extends Model
{
    protected $fillable = array('judul_artikel','isi_artikel','penulis','destinasi_id');
    public $timestamps = true;
    public function Destinasi(){
        return $this->belongsTo('App\Destinasi','destinasi_id');
    }
    public function Artikel(){
        return $this->hasOne('App\Artikel','artikel_id');
    }
}
