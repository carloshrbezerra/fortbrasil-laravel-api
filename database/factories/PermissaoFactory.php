<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Permissao::class, function (Faker $faker) {
    return [
        'tipo_operacao' => $faker->name()
    ];
});
