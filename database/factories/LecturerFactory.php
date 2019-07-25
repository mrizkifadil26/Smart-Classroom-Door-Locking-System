<?php

use Faker\Generator as Faker;
use App\User;

$factory->define(App\Lecturer::class, function (Faker $faker) {
    return [
        'nip' => $faker->randomNumber(8),
    ];
});
