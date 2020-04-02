<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Coleccion;
use Faker\Generator as Faker;

$factory->define(Coleccion::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->country,
        'descripcion'=> $faker->realText
    ];
});
