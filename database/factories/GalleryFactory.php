<?php

use Faker\Generator as Faker;

$factory->define(App\Gallary::class, function (Faker $faker) {
   $img = $faker->image(public_path('storage/gallaries'));
   $fullpath = explode('\\', $img);
   $path = end($fullpath);
    return [
      'title' => ucwords($faker->sentence),
      'gallaries_path' => $path,
      'status' => mt_rand(1, 2)
    ];
});
