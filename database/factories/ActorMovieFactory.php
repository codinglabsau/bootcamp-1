<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ActorMovie;
use Faker\Generator as Faker;

$factory->define(ActorMovie::class, function (Faker $faker) {
    return [
        'actor_id' => function () {
            return factory(\App\ActorMovie::class)->create()->id;
        },
        'movie_id' => function () {
            return factory(\App\ActorMovie::class)->create()->id;
        }
    ];
});
