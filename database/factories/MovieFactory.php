<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'description' => $faker->text(),
        'image' => 'images/search.png',
        'director_id' => function () {
        return factory(\App\Director::class)->create()->id;
        },
        'language_id' => function () {
        return factory(\App\Language::class)->create()->id;
        }
    ];
});
