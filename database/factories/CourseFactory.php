<?php

use Faker\Generator as Faker;
use App\Lecturer;

$factory->define(App\Course::class, function (Faker $faker) {
    return [
        'course' => $faker->bs,
        'lecturer_id' => function () {
            return Lecturer::inRandomOrder()->first()->id;
        },
    ];
});
