<?php

use Faker\Generator as Faker;
use Faker\Provider\Base;

$factory->define(App\Service::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 3),
        'discription' => $faker->paragraph,
        'image' => 'https://template.pro/wp-content/uploads/2016/06/Capture-d%E2%80%99e%CC%81cran-2016-06-21-a%CC%80-18.40.41.jpg',
        'default_price' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = 200),
        'default_quantity' => 200,
    ];
});
