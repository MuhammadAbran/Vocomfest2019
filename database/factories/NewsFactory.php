<?php

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

$factory->define(App\News::class, function (Faker $faker) {
   $img = $faker->image(public_path('storage/news'));
   $fullPath = explode('\\', $img);
   $path = end($fullPath);
    return [
        'title' => ucwords($faker->sentence()),
        'content' => $faker->paragraph(30),
        'thumbnail' => $path,
        'is_published' => mt_rand(1,2)
    ];
});
