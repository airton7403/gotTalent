<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Project;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Project::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'company_id' => 1,
        'title' => $faker->numerify('Avaliação ###'),
        'performance_module' => $faker->numberBetween(0,1),
        'goals_module' => $faker->numberBetween(0,1),
        'devolopment_plan_module' => $faker->numberBetween(0,1),
        'banknote_calibration' => $faker->numberBetween(0,1),
        'results' => $faker->numberBetween(0,1),
        'message_box' => $faker->numberBetween(0,1),
        'status' => $faker->numberBetween(1,3),
        'release_date' => $faker->date,
        'closing_date' => $faker->date,
        'comments' => $faker->paragraph(3),
        'token' => Str::random(15)
    ];
});
