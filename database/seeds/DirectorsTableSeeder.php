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
            'fullname' => 'Jordan Peele',
            'born' => ' February 21, 1979 in New York City, New York, USA',
            'height' => '1.71 m',
            'image' => '/css/images/peele.jpg',
        ]);

        factory(App\Director::class)->create([
            'name' => 'Guy Ritchie',
            'fullname' => 'Guy Stuart Ritchie',
            'born' => ' September 10, 1968 in Hatfield, Hertfordshire, England, UK',
            'height' => '1.8 m',
            'image' => '/css/images/Guy.jpg',
        ]);

        factory(App\Director::class)->create([
            'name' => 'Dennis Dugan',
            'fullname' => 'Dennis Barton Dugan',
            'born' => ' September 5, 1946 in Wheaton, Illinois, USA',
            'height' => '1.73 m',
            'image' => '/css/images/dennis.jpg',
        ]);
    }
}
