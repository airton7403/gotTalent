<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CompanyBoard;
use Faker\Generator as Faker;

$factory->define(CompanyBoard::class, function (Faker $faker) {
    return [
        'company_id' => 1,
        'name' => $faker->unique()->randomElement(['Diretoria de Tecnologia', 'Diretoria financeira', 'Diretoria de novos negócios', 'Diretoria executiva', 'Diretoria de Recusos Humanos', 'Diretoria de inovação', 'Diretoria de marketing', 'Diretoria de imprensa'])
    ];
});
