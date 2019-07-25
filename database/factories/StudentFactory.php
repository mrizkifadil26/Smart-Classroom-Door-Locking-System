<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'student_id' => function () {
            return User::inRandomOrder()->where('role_id', 2)->first()->id;
        },
        'nim' => $faker->randomNumber(8),
    ];
});
