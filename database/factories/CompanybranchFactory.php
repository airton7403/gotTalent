<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Companybranch;
use Faker\Generator as Faker;

$factory->define(Companybranch::class, function (Faker $faker) {
    return [
        'company_id' => 1,
        'name' => $faker->company,
        'domain' => $faker->domainName,
        'domain_talent' => $faker->domainWord,
        'logo' => $faker->imageUrl(640,480),
        'legal_registration' => '',
        'state_registration' => '',
        'municipal_registration' => '',
        'email' => $faker->companyEmail,
        'phone' => $faker->phoneNumber,
        'country' => "Brasil",
        'state' => $faker->state,
        'city' => $faker->city,
        'city_suffix' => $faker->citySuffix,
        'street_name' => $faker->streetName,
        'secondary_address' => $faker->secondaryAddress,
        'building_number' => $faker->buildingNumber,
        'postcode' => $faker->postcode,
        'note' => $faker->paragraph(3)
    ];
});
