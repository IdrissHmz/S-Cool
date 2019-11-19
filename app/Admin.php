<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends User
{
    //
    public $timestamps =false ;
    protected $fillable = [
        'user_id',
    ];

}
