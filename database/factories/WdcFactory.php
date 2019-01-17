<?php

use Faker\Generator as Faker;

$factory->define(App\Wdc::class, function (Faker $faker) {
   $user_id = [2,4,6,8,10];
   static $i = 0;
    return [
      'instance_name' => $faker->company,
      'instance_address' => $faker->state,
      'leader_name' => $faker->name,
      'leader_phone' => $faker->phoneNumber,
      'co_leader_name' => $faker->name,
      'co_leader_email' => $faker->safeEmail,
      'co_leader_phone' => $faker->phoneNumber,
      'member_name' => $faker->name,
      'member_email' => $faker->safeEmail,
      'member_phone' => $faker->phoneNumber,
      'progress' => mt_rand(1, 7),
      'user_id' => $user_id[$i++],
    ];
});