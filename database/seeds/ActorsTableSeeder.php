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
            'name' => 'Lupita Nyongo',
            'fullname' => 'Lupita Amondi Nyongo',
            'born' => 'March 1, 1983 in Mexico City, Distrito Federal, Mexico',
            'height' => '1.65 m',
            'image' => '/css/images/lupita.jpg'
        ]);

        factory(App\Actor::class)->create([
            'name' => 'Wiston Duke',
            'fullname' => 'Wiston Duke',
            'born' => '',
            'height' => '1.96 m',
            'image' => '/css/images/wiston.jpg'
        ]);

        factory(App\Actor::class)->create([
            'name' => 'Elizabeth Moss',
            'fullname' => 'Elisabeth Singleton Moss',
            'born' => 'July 24, 1982 in Los Angeles, California, USA',
            'height' => '1.6 m',
            'image' => '/css/images/elizabeth.jpg'
        ]);

        factory(App\Actor::class)->create([
            'name' => 'Tim Hiedecker',
            'fullname' => 'Tim Hiedecker',
            'born' => 'February 3, 1976 in Allentown, Pennsylvania, USA',
            'height' => '1.83 m',
            'image' => '/css/images/tim.jpg'
        ]);

        factory(App\Actor::class)->create([
            'name' => 'Will Smith',
            'fullname' => 'Willard Carroll Smith Jr.',
            'born' => 'September 25, 1968 in Philadelphia, Pennsylvania, USA',
            'height' => '1.88 m',
            'image' => '/css/images/will.jpg'
        ]);

        factory(App\Actor::class)->create([
            'name' => 'Mena Massound',
            'fullname' => 'Mena Massound',
            'born' => 'September 17, 1991 in Cairo, Egypt',
            'height' => '1.73 m',
            'image' => '/css/images/mena.jpg'
        ]);

        factory(App\Actor::class)->create([
            'name' => 'Naomi Scott',
            'fullname' => 'Naomi Scott',
            'born' => 'May 6, 1993 in London, England, UK',
            'height' => '1.67 m',
            'image' => '/css/images/naomi.jpg'
        ]);

        factory(App\Actor::class)->create([
            'name' => 'Marwan Kenzari',
            'fullname' => 'Lupita Amondi Nyongo',
            'born' => 'March 1, 1983 in Mexico City, Distrito Federal, Mexico',
            'height' => '1.65 m',
            'image' => '/css/images/marwan.jpg'
        ]);

        factory(App\Actor::class)->create([
            'name' => 'Adam Sandler',
            'fullname' => 'Adam Richard Sandler',
            'born' => 'September 9, 1966 in Brooklyn, New York City, New York, USA',
            'height' => '1.77 m',
            'image' => '/css/images/adam.jpg'
        ]);

        factory(App\Actor::class)->create([
            'name' => 'John Turturro',
            'fullname' => 'John Michael Turturro',
            'born' => 'February 28, 1957 in Brooklyn, New York City, New York, USA',
            'height' => '1.84 m',
            'image' => '/css/images/turturro.jpg'
        ]);
    }
}
