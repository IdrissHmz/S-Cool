<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Alert;
use Faker\Generator as Faker;

$factory->define(Alert::class, function (Faker $faker) {
    return [
        'title'=>$faker->title,
        'content'=>$faker->text,
        'type'=>$faker->numberBetween($min = 0,$max = 4),
        'post_date'=>$faker->date(),
        'receiver_id'=>$faker->numberBetween(1,8),
        'group_receiver_id'=>$faker->numberBetween(1,8)
    ];
});
