<?php

use Illuminate\Database\Seeder;

class ActorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Actor::class)->create([
            'name' => 'Lupita Nyongo'
        ]);
    }
}
