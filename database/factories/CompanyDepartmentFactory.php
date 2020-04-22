<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CompanyDepartment;
use Faker\Generator as Faker;

$factory->define(CompanyDepartment::class, function (Faker $faker) {
    return [
        'company_id' => 1,
        'name' => $faker->randomElement([
            'Administrativo',
            'Cargos e salários',
            'Comercial',
            'Consultoria',
            'Contas a receber',
            'Diretoria comercial',
            'Diretoria de administração',
            'Diretoria de operações',
            'Diretoria de projetos',
            'Diretoria de desenvolvimento',
            'Diretoria comercial',
            'Diretoria executiva',
            'Comercial',
            'Financeiro',
            'Folha de pagamento',
            'Gerência financeira',
            'Gerencia de contas',
            'Gerência de desenvolvimento',
            'Gerência geral',
            'Gerência de projetos',
            'Gerência jurídica',
            'Gerência de novos negócios',
            'Operacional',
            'Suporte ao cliente',
            'Tecnologia',
            'Desenvolvimento'
        ])
    ];
});
