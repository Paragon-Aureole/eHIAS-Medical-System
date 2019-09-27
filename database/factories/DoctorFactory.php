<?php

use Faker\Generator as Faker;

$factory->define(App\Doctor::class, function (Faker $faker) {
    return [
        'DoctorName' => $faker->name,
        'PRC_License' => $faker->postcode,
        'contactNumber' => $faker->tollFreePhoneNumber,
    ];
});
