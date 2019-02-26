<?php

use App\User;
use Illuminate\Support\Str;
use App\Helpers\User\Gender;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $social_meta = [
        'twitter'   => $faker->userName,
        'facebook'  => $faker->userName,
        'instagram' => $faker->userName,
    ];

    return [
        'first_name'     => $faker->firstName,
        'last_name'      => $faker->lastName,
        'email'          => $faker->unique()->safeEmail,
        'password'       => '$2y$10$uVBMEtjSEkWAGOi/D46ohOgOIaFMFk7/dSH0IeC2tf/sCkCy8fxZi', // password
        'dob'            => $faker->date(),
        'gender'         => collect(Gender::GENDER_LIST)->random(),
        'bio'            => $faker->realText(),
        'social'         => $social_meta,
        'remember_token' => Str::random(10),
    ];
});
