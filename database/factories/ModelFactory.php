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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Artist::class, function (Faker\Generator $faker) {
    return [
        'artist_name' => $faker->name($gender = null|'male'|'female'),
        'followers'    => $faker->randomDigitNotNull(),
        'artist_image'=>$faker->imageUrl($width = 256, $height = 256), 
        'artist_title' =>$faker->word(4),
        'artist_address' =>$faker->address(),
        'artist_phone' =>$faker->phoneNumber(),
        'artist_fb' =>$faker->sentence(4),
        'artist_description' => $faker->sentence()
    ];
});
