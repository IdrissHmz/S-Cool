<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Mark;
use Faker\Generator as Faker;

$factory->define(Mark::class, function (Faker $faker) {
    return [
        'mark'=>$faker->randomFloat($nbMaxDecimals = NULL,$min = 0,$max = 20),
        'type'=>$faker->numberBetween($min = 0,$max = 3),
        'student_id'=>$faker->numberBetween($min = 1,$max = 5),
        'module_id'=>$faker->numberBetween($min = 1,$max = 3),
    ];
});
