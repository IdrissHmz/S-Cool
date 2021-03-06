<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends User
{
    //
    public $timestamps =false ;
    protected $fillable = [
        'user_id', 'module',
    ];
    public function groups(){
        return $this->belongsToMany('App\Group');
    }
    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
