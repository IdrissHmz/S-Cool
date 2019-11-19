<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    //
    public $timestamps =false ;
    protected $fillable = [
        'name', 'coeff', 'formula',
    ];
    public function marks(){
        return $this->hasMany('App\Mark');
    }
}
