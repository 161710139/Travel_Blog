<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $fillable = array('artikel_id','member_id','komentar');
    public $timestamps = true;
    public function Artikel(){
        return $this->belongsTo('App\Artikel','artikel_id');
    }
    public function Member(){
        return $this->belongsTo('App\Member','member_id');
    }
}
