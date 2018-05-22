<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'category' => $faker->randomElement(['Beer', 'Wine', 'Spirit', 'nonAlcoholic', 'Extraneous']),
        'origin' => $faker->state,
        'unit_type' => $faker->randomElement(['Bottle', 'Can', 'Box', 'Draught']),
        'unit_volume' => $faker->numberBetween($min = 10, $max = 9000),
        'alcohol_content' => $faker->numberBetween($min = 0, $max = 10000),
        'sugar_content' => $faker->numberBetween($min = 0, $max = 50),
        'producer_name' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'release_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'is_seasonal' => $faker->boolean,
        'is_kosher' => $faker->boolean,
        'description' => $faker->sentence($nbWords = 20, $variableNbWords = true),
        'pairing' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'img_url' => $faker->imageUrl($width = 640, $height = 480, 'cats'),
        'varietal' => $faker->word,
        'style' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'upc' => $faker->randomNumber($nbDigits = null, $strict = false)
    ];
});
