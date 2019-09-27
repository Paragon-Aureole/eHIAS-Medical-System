<?php

use Faker\Generator as Faker;

$factory->define(App\Patient::class, function (Faker $faker) {
	$gender = $faker->randomElement(['male', 'female']);
	$birthday = $faker->date($format = 'Y-m-d', $max = 'now');
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 4),
		'patient_lastname' => $faker->lastName,
		'patient_middlename' => $faker->lastName,
		'patient_firstname' => $faker->firstName,
		'patient_gender' => $gender,
		'patient_civstat' => $faker->word,
		'patient_birthday' => $birthday,
		'patient_age' => Carbon\Carbon::parse($birthday)->age,
		'patient_barangay' => $faker->streetSuffix,
		'patient_city' => $faker->citySuffix,
		'patient_province' => $faker->state,
		'patient_height' => $faker->numberBetween($min = 90, $max = 190),
		'patient_weight' => $faker->numberBetween($min = 90, $max = 190),
		'patient_bp' => $faker->numberBetween($min = 90, $max = 190),
		'patient_contact' => $faker->e164PhoneNumber,
    ];
});
