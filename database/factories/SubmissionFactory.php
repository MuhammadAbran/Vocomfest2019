<?php

use Faker\Generator as Faker;

$factory->define(App\Submission::class, function (Faker $faker) {
    return [
        'submissions_path' => $faker->url,
        'theme' => $faker->word(5),
        'user_id' => $faker->unique()->numberBetween(1, 3),
    ];
});
