<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = array('user_id','foto');
    public $timestamps = true;
    public function Artikel(){
        return $this->belongsTo('App\User','user_id');
    }
    public function Role(){
        return $this->belongsToMany('App\Role','user_roles','member_id','role_id');
    }
    public function Komentar(){
        return $this->hasMany('App\Komentar','member_id');
    }
    public function Verifikasi(){
        return $this->hasMany('App\Verifikasi','member_id');
    }
    public function Member(){
        return $this->hasMany('App\Member','foto');
    }
}
