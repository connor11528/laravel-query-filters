<?php

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'website' => $faker->url,
        'year_founded' => $faker->year,
        'city' => $faker->city
    ];
});
