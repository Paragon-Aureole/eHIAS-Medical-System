<?php

use Faker\Generator as Faker;

$factory->define(App\Sickness::class, function (Faker $faker) {
    return [
        'sicknessName' => $faker->word,
        'sicknessDescription' =>  $faker->sentence($nbWords = 6, $variableNbWords = true) ,
    ];
});
