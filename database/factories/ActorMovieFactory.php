<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\ActorMovie;
use Faker\Generator as Faker;

$factory->define(ActorMovie::class, function (Faker $faker) {
    return [
        'actor_id' => 1,
        'movie_id' => 1
    ];
});
