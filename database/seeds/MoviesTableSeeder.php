<?php

use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Movie::class)->create([
            'title' => 'US',
            'image' => '/css/images/Us.png',
            'director_id' => \App\Director::where('name', 'Jordan Peele')->first()->id,
            'language_id' => \App\Language::first()->id
        ]);

        factory(App\Movie::class)->create([
            'title' => 'Aladdin',
            'image' => '/css/images/Aladdin.jpg',
            'director_id' => \App\Director::where('name', 'Guy Ritchie')->first()->id,
            'language_id' => \App\Language::first()->id
        ]);

        factory(App\Movie::class)->create([
            'title' => 'Zohan',
            'image' => '/css/images/Zohan.jpg',
            'director_id' => \App\Director::where('name', 'Dennis Dugan')->first()->id,
            'language_id' => \App\Language::first()->id
        ]);
    }
}
