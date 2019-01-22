<?php

use Faker\Generator as Faker;

$factory->define(App\Submission::class, function (Faker $faker) {
    return [
        'submissions_path' => $faker->url,
        'user_id' => $faker->unique()->numberBetween(1, 200),
    ];
});
