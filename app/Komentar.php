<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $fillable = array('user_id','artikel_id','komentar');
    public $timestamps = true;
    public function Artikel(){
        return $this->belongsToMany('App\Artikel','artikel_id');
    }
    public function User(){
    	return $this->belongsTo('App\User','user_id');
    }
}
