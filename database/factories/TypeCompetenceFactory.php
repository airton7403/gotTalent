<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TypeCompetence;
use Faker\Generator as Faker;

$factory->define(TypeCompetence::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement([
            'Aprendizado',
            'Atitude',
            'Bom relacionamento interpessoal',
            'Colaboração',
            'Comunicação',
            'Conhecimentos Técnicos',
            'Controle emocional',
            'Decisão',
            'Geral',
            'Gestão de conflitos',
            'Iniciativa / Proatividade',
            'Inovação / Criatividade'
        ])
    ];
});
