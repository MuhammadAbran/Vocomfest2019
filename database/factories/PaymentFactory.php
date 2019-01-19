<?php

use Faker\Generator as Faker;

$factory->define(App\Payment::class, function (Faker $faker) {
   $img = $faker->image(public_path('storage/payments'));
   $imgTrim = explode('\\', $img);
   $path = end($imgTrim);
    return [
        'payment_path' => $path,
        'user_id' => $faker->unique()->numberBetween(1, 200),
    ];
});
