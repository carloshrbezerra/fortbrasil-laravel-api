<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(App\Models\Menu::class, function (Faker $faker) {
    return [
        'ativo' => $faker->boolean(),
        'descricao' => $faker->paragraph(),
        'nome' => $faker->name()
    ];
});
