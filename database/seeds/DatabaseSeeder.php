<?php

use Illuminate\Database\Seeder;
//use database\seeds\MoviesTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(MoviesTableSeeder::class);
        $this->call(QuotesTableSeeder::class);
        $this->call(ActorsTableSeeder::class);
        $this->call(ActorMoviesTableSeeder::class);
    }
}
