<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Session;
use Faker\Generator as Faker;

$factory->define(Session::class, function (Faker $faker) {
    return [
        'session'=>(string)$faker->dateTime->format('h.i.s'),
        'class'=>$faker->randomElement(array('AP1','Ap2','S1','S2','S3','S4','S5','S6','S7')),
        'day'=>$faker->randomElement(array('SUN','MON','TUE','WED','THU','FRI')),
        'group'=>$faker->randomElement(array('CP1','1CP2')),
        'group_id'=>$faker->numberBetween(1,4),
        'module'=>$faker->randomElement(array('ARCHI','ORG','IGL'))
    ];
});
