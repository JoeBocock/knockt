<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'price' => $faker->numberBetween(1, 99999),
        'stock' => $faker->numberBetween(1, 99999),
    ];
});
