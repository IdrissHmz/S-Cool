<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends User
{
    //
    public $timestamps =false ;
    protected $fillable = [
        'group', 'promo', 'matric','group_id','user_id'
    ];
    public function group(){
        return $this->belongsTo('App\Group');
    }
    public function marks(){
        return $this->hasMany('App\Mark');
    }
}
