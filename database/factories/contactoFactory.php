<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contacto;
use Faker\Generator as Faker;

$factory->define(Contacto::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password'=>$faker ->password,
    ];
});
