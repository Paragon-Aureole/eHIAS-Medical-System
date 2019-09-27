<?php

use Faker\Generator as Faker;

$factory->define(App\Drug::class, function (Faker $faker) {
    return [
        'drugName' => $faker->word,
'drugDescription' => $faker->sentence,
    ];
});
