<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$fakerBr = Faker\Factory::create('pt_BR');

$factory->define(App\Models\User::class, function ($faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => str_random(10),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Volunteer::class, function ($faker) use ($fakerBr) {
    return [
        'name' => $fakerBr->name,
        'email' => $fakerBr->email,
        'phone' => $fakerBr->phoneNumber
    ];
});