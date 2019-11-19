<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alert extends Model
{
    //
    public $timestamps =false ;
    protected $fillable = [
        'title', 'content', 'type','post_date','receiver_id','group_receiver_id',
    ];
    public function user(){
        return $this->belongsTo('App\User');
    }
}
