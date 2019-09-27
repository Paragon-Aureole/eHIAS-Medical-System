<?php

use Faker\Generator as Faker;

$factory->define(App\Referral::class, function (Faker $faker) {
    return [
        'case_id' => $faker->numberBetween($min = 1, $max = 50),
		'description' => $faker->sentence,
		'referralDoctorName' => $faker->name,
		'referralDoctorContactNumber' => $faker->e164PhoneNumber,
		'user_id' => $faker->numberBetween($min = 1, $max = 4),
    ];
});
