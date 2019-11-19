<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //
    public $timestamps =false ;
    protected $fillable = [
        'session', 'class', 'day','group','group_id','module',
    ];
    public function group(){
        return $this->belongsTo('App\Group');
    }
}
