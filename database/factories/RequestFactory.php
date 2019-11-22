<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Demand;
use Faker\Generator as Faker;

$factory->define(Demand::class, function (Faker $faker) {
    return [
        'title'=>$faker->title,
        'content'=>$faker->text,
        'type'=>$faker->numberBetween($min = 0,$max = 4),
        'post_date'=>$faker->date(),
        'poster_id'=>$faker->numberBetween(1,8)
    ];
});
