<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
    protected $fillable = array('foto','artikel_id');
    public $timestamps = true;
    public function Artikel(){
        return $this->belongsTo('App\Artikel','artikel_id');
    }
}
