<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Fotografia;
use Faker\Generator as Faker;

$factory->define(Fotografia::class, function (Faker $faker) {
    return [
        	/*
        	'nombre'=> $faker->name,
        	'ubicacion' => $faker->country,
        	'descripcion' => $faker->realText,
        	'fecha' => $faker->date,
        	'ruta'=> $faker->name
        	*/
    ];
});
