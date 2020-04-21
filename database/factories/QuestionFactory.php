<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Question;
use Faker\Generator as Faker;

$factory->define(Question::class, function (Faker $faker) {
    return [
        'sub_competence_id' => $faker->numberBetween(1,20),
        'competence_id' => $faker->numberBetween(1,16),
        'question_third_person' => $faker->unique()->randomElement([
            'Age, constantemente, baseado na redução do possível impacto negativo de suas decisões sobre os demais setores da empresa.',
            'O quanto o colaborador esta disponível para o trabalho e cumpri as suas responsabilidades com disposição.',
            'Comportamento profissional perante situacoes. Confiabilidade nas respostas, entende o impacto de suas atitudes, zela pela produtividade do ambiente.',
            'Capacidade de avaliar dados e cenários,  estruturando sua análise de forma racional, permitindo emitir pareceres  consistentes considerando riscos, oportunidades e impactos.',
            'Adequá seu vocabulário para atingir melhor as mais diferentes pessoas. Adapta seu estilo de argumentação, discurso  e vocabulário de acordo com o público-alvo e tema discutido, fazendo seu ponto-de-vista ser compreendido e aceito em diferentes discussões.',
            'As competências técnicas relacionam-se às características e necessidades específicas de cada área do Hospital cardio pulmonar e seus processos de trabalho. Estas competências são de natureza técnica e tem como objetivo conduzir o integrante à execução dos processos de trabalhos das referidas áreas organizacionais da empresa.',
            'Demonstra compromisso com mo cliente, GPS, colegas e com o sigilo das informações.',
            'Atua com foco no atingimento  e na superação das expectativas de objetivos e metas acordados.',
            'Estabelece de forma clara e objetiva o que quer e o que espera dos outros, expressa claramente suas opiniões e ideias, mantém um fluxo de informação constante e preciso. Tem a tendência de cometer menos erros devido à eficácia da comunicação, garante que as expectativas serão entendidas, mantém os outros bem informados, desenvolve pessoas muito bem treinadas e competentes pela clareza da informação transmitida, reduz erros de julgamento e decisões equivocadas. ',
            'Da valor às ideias e opiniões dos outros, buscando seus inputs como parte do seu processo de tomada de decisões, sem deixar de expressar sua opinião como parte do processo de consenso. Incentiva o envolvimento das outras pessoas, está aberto às ideias das outras pessoas, aceita as decisões do grupo, adota uma abordagem participativa para desenvolver um grupo de trabalho mais satisfatório sem deixar de se posicionar nas tomadas de decisão.',
            'Costuma supervisionar o setor frequentemente, realizando visitas periódicas e entrevistas com os liderados para checar o cumprimento dos prazos e o clima no ambiente de trabalho.',
            'Organiza reuniões periódicas com toda a equipe para obter o feedback sobre o andamento dos projetos e para o compartilhamento de informações.',
            'Influencia positivamente e conduz o grupo de forma a conciliar os objetivos da organização com as necessidades e habilidades de sua equipe, conquistando respeito, confiança e mantendo em um bom nível a motivação geral.',
            'Percebe a empresa como um todo, cooperando e contribuindo com as áreas, visando ganhos para a empresa de uma forma geral.',
            'Sou receptivo a novos colegas, idéias e procedimentos.',
            'Trabalha com espírito de cooperação, de forma construtiva e flexível para atingir os resultados esperados.',
            'A medida em que o empregado estabelece e mantem boas relações com os colegas de trabalho e ou clientes.',
            'Valorizar os integrantes e estimulá-los na busca ao seu desenvolvimento pessoal e profissional de forma contínua, bem como oferecer oportunidades de desenvolvimento de novas competências.',
            'Contribuí positivamente para o desenvolvimento dos próprios liderados, estando sempre à disposição para o esclarecimento de dúvidas dos mesmos.',
            'Incentiva os liderados à busca do conhecimento, ouvindo e aconselhando sobre seus anseios profissionais e sobre os rumos a serem seguidos.'
        ]),
    ];
});
