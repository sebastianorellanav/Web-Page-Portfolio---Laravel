<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Usuario;
use Faker\Generator as Faker;

$factory->define(Usuario::class, function (Faker $faker) {
    return [
            'nombre'=> $faker->name,
            'contrasena'=> $faker->firstname,
            'correo'=> $faker->unique()->safeEmail,
            'descripcion'=> $faker->realText
    ];
});
