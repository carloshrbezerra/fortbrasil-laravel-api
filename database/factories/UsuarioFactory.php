<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Usuario::class, function (Faker $faker) {
    return [
        'email' => $faker->name(),
        'email_verified_at' => $faker->date(),
        'nome' => $faker->name(),
        'password' => $faker->password(),
    ];
});
