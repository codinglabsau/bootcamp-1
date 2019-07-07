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
            'title' => 'US'
        ]);

        factory(App\Movie::class)->create([
            'title' => 'Aladdin'
        ]);

        factory(App\Movie::class)->create([
            'title' => 'Zohan'
        ]);
    }
}
