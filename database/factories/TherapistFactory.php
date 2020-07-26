<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Therapist;
use Faker\Generator as Faker;

$factory->define(Therapist::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'therapist_picture' =>$faker->imageUrl($width = 640, $height = 480, 'people', true, 'Faker'),
        'info' =>$faker->sentence($nbWords = 6, $variableNbWords = true),
        'fees' => $faker->numberBetween($min = 150, $max = 400),


    ];
});
