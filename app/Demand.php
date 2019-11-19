<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    //
    public $timestamps =false ;
    protected $fillable = [
        'title', 'content', 'type','post_date','poster_id',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
