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
        ]);

        factory(App\Director::class)->create([
            'name' => 'Guy Ritchie',
        ]);

        factory(App\Director::class)->create([
            'name' => 'Dennis Dugan',
        ]);
    }
}
