<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\SubCompetence;
use Faker\Generator as Faker;

$factory->define(SubCompetence::class, function (Faker $faker) {
    return [
        'competence_id' => $faker->numberBetween(1,15),
        'name' => $faker->randomElement([
            'Uso do conhecimento',
            'Superação',
            'SAP',
            'Desenvolvimento pessoal',
            'Capacidade de achar soluções',
            'Companherismo',
            'Entedimento do negócio',
            'UX',
            'CS',
            'Propagação de conhecimento',
            'Absorver conhecimento',
            'Compromentimento com prazos',
            'Desenvolvimento de equipe'
        ]),
        'observation' => $faker->paragraph(3)
    ];
});
