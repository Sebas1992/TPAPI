<?php

use Faker\Generator as Faker;

$factory->define(App\Computer::class, function (Faker $faker) {
    return [
        'brand' => $faker->company,
        'model' => $faker->name,
        'sku' => $faker->randomNumber,
    ];
});
