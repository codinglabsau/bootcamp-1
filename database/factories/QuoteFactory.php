<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Quote;
use Faker\Generator as Faker;

$factory->define(Quote::class, function (Faker $faker) {
    return [
        'actor_id' => function () {
            return factory(\App\Quote::class)->create()->id;
        },
        'movie_id' => function () {
            return factory(\App\Quote::class)->create()->id;
        },
        'quote' => $faker->text(),
    ];
});
