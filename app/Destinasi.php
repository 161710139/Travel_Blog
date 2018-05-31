<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    protected $fillable = array('nama_destinasi');
    public $timestamps = true;
    public function Verifikasi(){
       return $this->hasMany( 'App\Verifikasi' , 'verifikasi_id');
    }
}
