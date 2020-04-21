<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TypeCompetence;
use Faker\Generator as Faker;

$factory->define(TypeCompetence::class, function (Faker $faker) {
    return [
        'name' => $faker->randomElement(
            'Apredizado',
            'Atitude',
            'Bom relacionamento interpessoal',
            'Colaboraçao',
            'Comunicação',
            'Conhecimentos Técnicos',
            'Controle emocional',
            'Decisão',
            'Geral',
            'Gestão de conflitos',
            'Iniciativa / Proatividade',
            'Inovação / Criatividade'
        )
    ];
});
