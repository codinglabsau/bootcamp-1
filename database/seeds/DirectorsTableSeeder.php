<?php

use Illuminate\Database\Seeder;

class DirectorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Director::class)->create([
            'name' => 'Jordan Peele',
            'movie_id'=> 1
        ]);

        factory(App\Director::class)->create([
            'name' => 'Guy Ritchie',
            'movie_id'=> 2
        ]);

        factory(App\Director::class)->create([
            'name' => 'Dennis Dugan',
            'movie_id'=> 3
        ]);
    }
}
