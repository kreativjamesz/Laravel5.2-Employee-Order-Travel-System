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
$factory->define(App\Employee::class, function (Faker\Generator $faker) {
    return [
        'last_name' 	=> $faker->lastName,
        'first_name' 	=> $faker->firstNameMale,
        'title_name' 	=> $faker->titleMale,
        'position_name'	=> $faker->jobTitle,
        'mobile_num'	=> '09301234567',
        'email_add'		=> $faker->safeEmail,
        'password' 		=> bcrypt('123123'),
        'status' 		=> 'INACTIVE',
    ];
});

$factory->define(App\TravelRequest::class, function (Faker\Generator $faker) {
    return [
        'travel_purpose' => $faker->name,
        'travel_date_time' => $faker->dateTime($max = 'now', $timezone = date_default_timezone_get()),
        'travel_destination' => $faker->country,
        'travel_airline_carrier' => $faker->company,
        'travel_no'=>$faker->isbn10,
        'travel_remarks'=>'I dont know what to put',
        'travel_status'=>'ACTIVE',
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
	$pic = ['jeric.jpg','james'];
    return [
        'last_name' 	=> $faker->lastName,
        'first_name' 	=> $faker->firstNameMale,
        'title_name' 	=> $faker->titleMale,
        'email'			=> $faker->safeEmail,
        'password' 		=> bcrypt('123123'),
        'profile-pic'	=> $pic[mt_rand(0, 1)],
        'contact_num'	=> '09301234567',
        'status' 		=> 'INACTIVE',
        'address'		=> $faker->address,
        'remember_token'=> str_random(10),
    ];
});

$factory->define(App\Title::class, functon (Faker\Generator $faker){
    return [
        'title_name'    => $faker->titleMale,
        'description'   => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ];
});
