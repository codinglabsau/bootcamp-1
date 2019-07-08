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
            'image' => '/css/images/Us.png'
        ]);

        factory(App\Movie::class)->create([
            'title' => 'Aladdin',
            'image' => '/css/images/Aladdin.jpg'
        ]);

        factory(App\Movie::class)->create([
            'title' => 'Zohan',
            'image' => '/css/images/Zohan.jpg'
        ]);
    }
}
