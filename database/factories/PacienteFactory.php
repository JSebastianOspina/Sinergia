<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Paciente;
use Faker\Generator as Faker;

$factory->define(Paciente::class, function (Faker $faker) {

    return [
        'tipos_documento_id' => $faker->numberBetween(1,2),
        'numero_documento' => $faker->randomNumber(5),
        'nombre1'=> $faker->firstNameMale,
        'nombre2'=> $faker->firstNameMale,
        'apellido1'=> $faker->lastName,
        'apellido2'=> $faker->lastName,
        'genero_id' => '1',
        'departamento_id' => '1',
        'municipio_id' => '1',
    ];
});
