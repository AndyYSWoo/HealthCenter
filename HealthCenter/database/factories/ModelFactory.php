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
        'remember_token' => str_random(10),
        'type'      => App\User::TYPE_PLAYER,
        'true_name' => $faker->name,
        'password'  => bcrypt('123456'),
        'gender'    => 1,
        'birthday'  => strtotime('May 1 1995'),
        'portrait'  => '/img/portrait/'.rand(1,4).'.jpg'
    ];
});

$factory->define(App\sportsentry::class, function (Faker\Generator $faker) {
    $userid = 1;
    if(rand(1,30)!=1){
        $userid = rand(5,32);
    }
    $time = $faker->dateTimeBetween('2013-01-01 00:00:01');
    return [
        'user_id' => $userid,
        'device_id' => 1,
        'type' => 1,
        'timescale' => 1,
        'level' => 1,
        'last_time' => rand(1800,7200) ,
        'calories' => rand(300,1000),
        'value' => rand(3000,5000),
        'value2' => rand(3000,5000),
        'start_time' => $faker->dateTimeBetween('2013-01-01 00:00:01',$time),
        'end_time' => $faker->dateTimeBetween($time),
        'description' => $faker->sentence()
    ];
});

$factory->define(App\healthentry::class, function (Faker\Generator $faker) {
    $userid = 1;
    if(rand(1,30)!=1){
        $userid = rand(5,32);
    }
    
    $time = $faker->dateTimeBetween('2013-01-01 00:00:01');
    $type = rand(1,6);
    $value = rand(18000,28800);
    $value2= 0;    
    switch($type){
        case App\healthentry::TYPE_SLEEP:
            $value = rand(7200,10800);
            break;
        case App\healthentry::TYPE_BLOODPRESSURE:
            $value = rand(80,100);
            $value2 = rand(120,160);
            break;
        case App\healthentry::TYPE_HEARTRATE:
            $value = rand(60,100);
            break;
        case App\healthentry::TYPE_TEMPERATURE:
            $value = rand(35,38);
            break;
        case App\healthentry::TYPE_HEIGHT:
            $value = rand(170,180);
            break;
        case App\healthentry::TYPE_WEIGTH:
            $value = rand(60,75);
            break;
    }
    return [
        'user_id' => $userid,
        'device_id' => 2,
        'timescale' => 1,
        'level' => rand(1,3),
        'type' => $type,
        'begin_time' => $time,
        'end_time' => $time,
        'last_time' => $value ,
        'value' => $value,
        'value2' => $value2,
        'description' => $faker->sentence()
    ];
});

$factory->define(App\activity::class, function (Faker\Generator $faker) {
    $userid = 1;
    if(rand(1,10)!=1){
        $userid = rand(5,32);
    }
    $dateTime = $faker->dateTimeBetween('now','+1 years');
    return [
        'name' => $faker->sentence(3),
        'type' => rand(1,3),
        'author_id' => $userid,
        'place' => $faker->address,
        'description' => $faker->sentence(50),
        'poster' => '/img/activity/poster'.rand(1,3).'.jpg',
        'date' => $dateTime->format('Y-m-d'),
        'time' => $faker->time ,
        'contact' => 'Phone:'.$faker->phoneNumber.'email:'.$faker->email,
    ];
});

$factory->define(App\healthadvice::class, function (Faker\Generator $faker) {
    return [
        'doctor_id' => 3,
        'player_id' => 1,
        'content' => $faker->sentence(100),
    ];
});

$factory->define(App\feed::class, function (Faker\Generator $faker) {
    $userid = 1;
    if(rand(1,3)==1){
        $userid = rand(5,32);
    }
    return [
        'author_id' => $userid,
        'content' => $faker->sentence(30),
        'photo' => '/img/activity/poster'.rand(1,3).'.jpg'
    ];
});

$factory->define(App\feedcomment::class, function (Faker\Generator $faker) {
    $userid = 1;
    if(rand(1,3)==1){
        $userid = rand(5,32);
    }
    return [
        'feed_id' => rand(1,10),
        'author_id' => $userid,
        'content' => $faker->sentence(20)
    ];
});

$factory->define(App\group::class, function (Faker\Generator $faker) {
    $userid = 1;
    if(rand(1,3)==1){
        $userid = rand(5,32);
    }
    return [
        'author_id' => $userid,
        'name'     => $faker->sentence(4),
        'motto'     => $faker->sentence(5),
        'description' => $faker->sentence(50),
        'poster' => '/img/group/poster/poster'.rand(1,3).'.jpg',
    ];
});

$factory->define(App\post::class, function (Faker\Generator $faker) {
    $userid = 1;
    if(rand(1,3)!=1){
        $userid = rand(5,32);
    }
    return [
        'author_id' => $userid,
        'group_id'     => rand(1,5),
        'title' => $faker->sentence(5),
        'content' => $faker->sentence(200),
        'photo' => '/img/group/poster/poster'.rand(1,3).'.jpg',
    ];
});

$factory->define(App\postcomment::class, function (Faker\Generator $faker) {
    $userid = 1;
    if(rand(1,3)!=1){
        $userid = rand(5,32);
    }
    return [
        'post_id' => $userid,
        'player_id'     => 1,
        'content' => $faker->sentence(50),
    ];
});