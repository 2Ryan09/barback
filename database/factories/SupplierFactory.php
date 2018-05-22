<?php

use Faker\Generator as Faker;

$factory->define(App\Supplier::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'contact_name' => $faker->name,
        'contact_title' => $faker->jobTitle,
        'contact_email' => $faker->email,
        'contact_number_type' => $faker->randomElement(['landline', 'cell']),
        'contact_number' => $faker->randomNumber($nbDigits = null, $strict = false),
    ];
});
