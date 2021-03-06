<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pesan extends Model
{
    protected $fillable = array('isi_pesan','verifikasi_id');
    public $timestamps = true;
    public function Artikel(){
        return $this->belongsTo('App\Verifikasi','verifikasi_id');
    }
}
