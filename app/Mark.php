<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    //
    public $timestamps =false ;
    protected $fillable = [
        'mark', 'type', 'student_id','module_id',
    ];
    public function module(){
        return $this->belongsTo('App\Module');
    }
    public function student(){
        return $this->belongsTo('App\Student');
    }
}
