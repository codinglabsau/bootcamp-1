<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Actor;
use Faker\Generator as Faker;

$factory->define(Actor::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'bio' => $faker->text(),
        'image' => 'images/lupita.jpg',
    ];
});
