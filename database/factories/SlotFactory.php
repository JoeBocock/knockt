<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Slot;
use Faker\Generator as Faker;

$factory->define(Slot::class, function (Faker $faker) {
    return [
        'name' => $faker->bothify('#?'),
        'row_id' => $faker->numberBetween(1, 30),
        'product_id' => $faker->numberBetween(1, 100),
    ];
});
