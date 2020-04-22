<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\CompanyPosition;
use Faker\Generator as Faker;

$factory->define(CompanyPosition::class, function (Faker $faker) {
    return [
        'company_id' => 1,
        'name' => $faker->unique()->randomElement([
            'ADVOGADO SR',
            'ANALISTA CARGOS SALARIOS',
            'ANALISTA DE COBRANÇA',
            'ANALISTA DE FOLHA DE PAGAMENTO',
            'ANALISTA FOLHA DE PAGAMENTO',
            'ANALISTA TREINAMENTO',
            'ASSISTENTE DE TREINAMENTO',
            'ASSISTENTE FINANCEIRO',
            'CONSULTOR DE NEGÓCIOS',
            'CONSULTOR JUNIOR',
            'CONSULTOR PLENO',
            'CONSULTOR SOU',
            'DESENVOLVEDOR',
            'DIRETOR ADMINISTRATIVO FINANCEIRO',
            'DIRETOR COMERCIAL',
            'DIRETOR DE PROJETOS',
            'DIRETOR DESENVOLVIMENTO',
            'DIRETOR FINANCEIRO',
            'DIRETOR OPERACIONAL',
            'DIRETORA POD',
            'ESTAGIÁRIO',
            'GERENTE ADMINISTRATIVO FINANCEIRO',
            'GERENTE DE CONTAS',
            'GERENTE DE PROJETOS',
            'GERENTE DE TECNOLOGIA',
            'GERENTE DESENVOLVIMENTO',
            'GERENTE FINANCEIRO',
            'GERENTE GERAL',
            'GERENTE INFORMATICA',
            'GERENTE NOVOS NEGOCIOS',
            'GERENTE POD',
            'GERENTE PROJETOS',
            'GERENTE RECURSOS HUMANOS',
            'GERENTE RH',
            'GERENTE T&D',
            'LIDER DE EQUIPE',
            'PARCEIRO',
            'PESQUISA',
            'PRESIDENTE',
            'SUPERVISOR 1',
            'SUPORTE PC',
            'SUPORTE REDE',
            'TECNICO SENIOR'
        ])
    ];
});
