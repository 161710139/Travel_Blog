<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = array('foto','verifikasi_id');
    public $timestamps = true;
    public function Verifikasi(){
        return $this->belongsTo('App\Verifikasi','verifikasi_id');
    }
}
