<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Competence;
use Faker\Generator as Faker;

$factory->define(Competence::class, function (Faker $faker) {
    return [
        'type_competence_id' => 11,
        'name' => $faker->unique()->randomElement([
            'Acão sistêmica',
            'Assidualidade e pontualidade',
            'Atitude empreendedora',
            'Atitude profissional',
            'Automotivação e entusiasmo',
            'Capacidade analítica',
            'Capacidade de delegar',
            'Colaboração de Influência',
            'Competências técnicas',
            'Comprometimento',
            'Comprometimento com resultados',
            'Comunicação',
            'Consenso',
            'Controle Gerencial',
            'Ética e transparência',
            'Empatia'
        ]),
        'observation' => $faker->paragraph(3)
    ];
});
