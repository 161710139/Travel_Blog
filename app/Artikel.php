<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $fillable = array('verifikasi_id');
    public $timestamps = true;
    public function Verifikasi(){
        return $this->belongsTo('App\Verifikasi' , 'verifikasi_id');
    }
}
