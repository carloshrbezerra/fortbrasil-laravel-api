<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Pessoa::class, function (Faker $faker) {
    return [
        'ativo' => $faker->boolean(),
        'localizacao' => $faker->name(),
        'data_abertura' => $faker->date(),
        'email' => $faker->email(),
        'nome' => $faker->name(),
        'nome_fantasia' => $faker->name(),
        'telefone' => $faker->phoneNumber(),
        'atividade' => $faker->name(),
    ];
});
