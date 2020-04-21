<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\UserProfile;
use Faker\Generator as Faker;

$factory->define(UserProfile::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'company_id' => 1,
        'matriculation' => "MID-001",
        'kind_person' => 1,
        'individual_registration' => "291.407.838-20",
        'admission_date' => '2001-01-01',
    ];
});
