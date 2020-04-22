<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserProfile;
use Faker\Generator as Faker;

$factory->define(UserProfile::class, function (Faker $faker) {
    return [
        'user_id' => $faker->unique()->numberBetween(1,5),
        'company_id' => 1,
        'company_position_id' => $faker->numberBetween(1,43),
        'company_department_id' => $faker->numberBetween(1,26),
        'manager_id' => $faker->numberBetween(1,15),
        'matriculation' => $faker->numerify('MID-####'),
        'kind_person' => 1,
        'individual_registration' => $faker->numerify('###.###.###-##'),
        'admission_date' => '2001-01-01',
    ];
});
