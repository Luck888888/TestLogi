<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\project::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence(rand(2,6)),
        'description' => $faker->text(rand(200,500)),
        'kard_id' => \App\Kards::query()->inRandomOrder()->first()->id,
    ];
});
