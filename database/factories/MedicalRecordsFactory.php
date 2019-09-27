<?php

use Faker\Generator as Faker;

$factory->define(App\MedicalRecord::class, function (Faker $faker) {
    return [
        'patient_id' => $faker->numberBetween($min = 1, $max = 50),
		'case_id' => $faker->numberBetween($min = 1, $max = 50),
		'user_id' => $faker->numberBetween($min = 1, $max = 10),
    ];
});
