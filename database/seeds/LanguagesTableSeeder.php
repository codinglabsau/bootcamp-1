<?php

use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Language::class)->create([
            'Language' => 'English',
            'movie_id'=> 1
        ]);

        factory(App\Language::class)->create([
            'Language' => 'English',
            'movie_id'=> 2
        ]);

        factory(App\Language::class)->create([
            'Language' => 'English',
            'movie_id'=> 3
        ]);
    }
}
