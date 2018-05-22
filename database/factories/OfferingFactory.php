<?php

use Faker\Generator as Faker;

$factory->define(App\Offering::class, function (Faker $faker) {
    return [
        'product_id' => factory(App\Product::class)->create()->id,
        'price' => $faker->numberBetween($min = 5, $max = 200),
        'cost' => $faker->numberBetween($min = 200, $max = 300),
        'supplier_id' => factory(App\Supplier::class)->create()->id,
    ];
});
