<?php

use Faker\Generator as Faker;

$factory->define(App\Bottle::class, function (Faker $faker) {
    return [
        'offering_id' => $faker->numberBetween($min = 1, $max = 40),
        'location_id' => $faker->numberBetween($min = 1, $max = 5),
        'amount' => $faker->randomFloat($nbMaxDecimals = 1, $min = 0, $max = 1),
    ];
});
