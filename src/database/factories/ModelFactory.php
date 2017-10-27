<?php

use App\Match;
use App\MatchMaster;
use App\Team;
use App\Tournament;
use App\User;
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
    static $password;

    return [
        'full_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'phone' => $faker->phoneNumber,
        'gender' => $faker->randomElement([User::MALE, User::FEMALE]),
        'bio' => $faker->paragraph(1),
        'is_admin' => $faker->randomElement([User::ADMIN_USER, User::REGULAR_USER]),
        'remember_token' => str_random(10),
    ];
});


$factory->define(Tournament::class, function (Faker $faker) {
   return [
       'name' => $faker->company,
       'tournament_master_id' => User::all()->random(),
       'place' => $faker->city,
       'date_start' => $faker->date()
   ];
});

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
   ];
});

$factory->define(Match::class, function (Faker $faker) {
    return [
        'name' => $faker->company,
        'match_master_id' => MatchMaster::all()->random(),
        'tournament_id' => Tournament::all()->random(),
        'place' => $faker->city,
        'date' => $faker->date(),
        'time' => $faker->time(),
        'team0_id' => $team0 = Team::all()->random(),
        'team1_id' => Team::all()->except($team0->id)->random()
    ];
});
