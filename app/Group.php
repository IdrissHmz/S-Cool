<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //
    public $timestamps =false ;
    protected $fillable = [
        'name', 'nb_student',
    ];
    public function students(){
    return $this->hasMany('App\Student');
    }
    public function sessions(){
        return $this->hasMany('App\Session');
    }
    public function teachers(){
        return $this->belongsToMany('App\Teacher');
    }
}
