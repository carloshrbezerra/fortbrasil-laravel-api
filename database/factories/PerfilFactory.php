<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Perfil::class, function (Faker $faker) {
    return [
        'ativo' => $faker->boolean(),
        'nome' => $faker->name()
    ];
});
