<?php

use Illuminate\Database\Seeder;

class ActorMoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\ActorMovie::class)->create();
    }
}
