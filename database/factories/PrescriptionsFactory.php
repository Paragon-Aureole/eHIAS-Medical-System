<?php

use Faker\Generator as Faker;

$factory->define(App\Prescription::class, function (Faker $faker) {
    return [
        'case_id' => $faker->numberBetween($min = 1, $max = 50),
		'drug_id' => $faker->numberBetween($min = 1, $max = 50),
		'quantity' => $faker->randomDigit ,
		'user_id' => $faker->numberBetween($min = 1, $max = 4),
    ];
});
