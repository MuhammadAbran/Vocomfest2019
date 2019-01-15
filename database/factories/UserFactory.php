<?php

use Faker\Generator as Faker;
use App\User;

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

$factory->define(App\User::class, function (Faker $faker) {
   static $id = 1;
   $UID = $id++;
   $role = mt_rand(2, 3);
   $user = User::find($UID);
   if ($user['role'] == 3) {
      $team = "WDC Team : ";
   }else if($user['role'] == 2) {
      $team = "MADC Team : ";
   }else {
      $team = $faker->name;
   }
dd($user['role']);
    return [
        'id' => $UID,
        'team_name' => $team,
        'leader_email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'role' => $role,
        'remember_token' => str_random(10),
    ];
});
