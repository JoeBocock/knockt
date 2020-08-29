<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Row;
use Faker\Generator as Faker;

$factory->define(Row::class, function (Faker $faker) {
    return [
        'name' => $faker->word(),
        'machine_id' => $faker->numberBetween(1, 10),
    ];
});
