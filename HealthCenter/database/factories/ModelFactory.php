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
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\sportsentry::class, function (Faker\Generator $faker) {
    $time = $faker->dateTimeBetween('2015-12-1 00:00:01');
    return [
        'user_id' => 1,
        'device_id' => 1,
        'type' => 1,
        'timescale' => 1,
        'level' => 1,
        'last_time' => rand(60,7200) ,
        'calories' => rand(300,1000),
        'value' => rand(3000,5000),
        'value2' => rand(3000,5000),
        'start_time' => $faker->dateTimeBetween('2015-12-1 00:00:01',$time),
        'end_time' => $faker->dateTimeBetween($time),
        'description' => $faker->sentence()
    ];
});

$factory->define(App\healthentry::class, function (Faker\Generator $faker) {
    $time = $faker->dateTimeBetween('2015-12-1 00:00:01','2015-12-1 10:00:01');
    $value = rand(18000,28800);
    return [
        'user_id' => 1,
        'device_id' => 2,
        'timescale' => 1,
        'level' => rand(1,3),
        'type' => rand(1,6),
        'begin_time' => $time,
        'end_time' => $time,
        'last_time' => $value ,
        'value' => $value,
        'value2' => rand(18000,28800),
        'description' => $faker->sentence()
    ];
});

$factory->define(App\activity::class, function (Faker\Generator $faker) {
    $dateTime = $faker->dateTimeBetween('now','+1 years');
    return [
        'name' => $faker->sentence(3),
        'type' => rand(1,3),
        'author_id' => 1,
        'place' => $faker->address,
        'description' => $faker->sentence(50),
        'poster' => '/img/activity/poster'.rand(1,3).'.jpg',
        'date' => $dateTime->format('Y-m-d'),
        'time' => $faker->time ,
        'contact' => 'Phone:'.$faker->phoneNumber.'email:'.$faker->email,
    ];
});