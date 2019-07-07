<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Quote;
use Faker\Generator as Faker;

$factory->define(Quote::class, function (Faker $faker) {
    return [
        'actor_id' => 1,
        'movie_id' => 1,
        'quote' => $faker->text(),
    ];
});
