<?php

use Illuminate\Database\Seeder;

class QuotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Quote::class)->create([
            'actor_id' => \App\Actor::where('name', 'Lupita Nyongo')->first()->id,
            'movie_id' =>  \App\Movie::where('title', 'US')->first()->id
        ]);

        factory(App\Quote::class)->create([
            'actor_id' => \App\Actor::where('name', 'Wiston Duke')->first()->id,
            'movie_id' => \App\Movie::where('title', 'US')->first()->id
        ]);

        factory(App\Quote::class)->create([
            'actor_id' => \App\Actor::where('name', 'Elizabeth Moss')->first()->id,
            'movie_id' => \App\Movie::where('title', 'US')->first()->id
        ]);

        factory(App\Quote::class)->create([
            'actor_id' => \App\Actor::where('name', 'Tim Hiedecker')->first()->id,
            'movie_id' => \App\Movie::where('title', 'US')->first()->id
        ]);

        factory(App\Quote::class)->create([
            'actor_id' => \App\Actor::where('name', 'Will Smith')->first()->id,
            'movie_id' => \App\Movie::where('title', 'Aladdin')->first()->id
        ]);

        factory(App\Quote::class)->create([
            'actor_id' => \App\Actor::where('name', 'Mena Massound')->first()->id,
            'movie_id' => \App\Movie::where('title', 'Aladdin')->first()->id
        ]);

        factory(App\Quote::class)->create([
            'actor_id' => \App\Actor::where('name', 'Naomi Scott')->first()->id,
            'movie_id' => \App\Movie::where('title', 'Aladdin')->first()->id
        ]);

        factory(App\Quote::class)->create([
            'actor_id' => \App\Actor::where('name', 'Marwan Kenzari')->first()->id,
            'movie_id' => \App\Movie::where('title', 'Aladdin')->first()->id
        ]);

        factory(App\Quote::class)->create([
            'actor_id' => \App\Actor::where('name', 'Adam Sandler')->first()->id,
            'movie_id' => \App\Movie::where('title', 'Zohan')->first()->id
        ]);

        factory(App\Quote::class)->create([
            'actor_id' => \App\Actor::where('name', 'John Turturro')->first()->id,
            'movie_id' => \App\Movie::where('title', 'Zohan')->first()->id
        ]);

        factory(App\Quote::class)->create([
            'actor_id' => \App\Actor::where('name', 'John Turturro')->first()->id,
            'movie_id' => \App\Movie::where('title', 'Zohan')->first()->id
        ]);
    }
}
