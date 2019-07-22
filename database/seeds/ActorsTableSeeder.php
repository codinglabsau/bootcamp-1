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
            'fullname' => 'Lupita Amondi Nyongo',
            'born' => 'March 1, 1983 in Mexico City, Distrito Federal, Mexico',
            'height' => '1.65 m',
            'image' => '/css/images/wiston.jpg'
        ]);

        factory(App\Actor::class)->create([
            'name' => 'Elizabeth Moss',
            'fullname' => 'Lupita Amondi Nyongo',
            'born' => 'March 1, 1983 in Mexico City, Distrito Federal, Mexico',
            'height' => '1.65 m',
            'image' => '/css/images/elizabeth.jpg'
        ]);

        factory(App\Actor::class)->create([
            'name' => 'Tim Hiedecker',
            'fullname' => 'Lupita Amondi Nyongo',
            'born' => 'March 1, 1983 in Mexico City, Distrito Federal, Mexico',
            'height' => '1.65 m',
            'image' => '/css/images/tim.jpg'
        ]);

        factory(App\Actor::class)->create([
            'name' => 'Will Smith',
            'fullname' => 'Lupita Amondi Nyongo',
            'born' => 'March 1, 1983 in Mexico City, Distrito Federal, Mexico',
            'height' => '1.65 m',
            'image' => '/css/images/will.jpg'
        ]);

        factory(App\Actor::class)->create([
            'name' => 'Mena Massound',
            'fullname' => 'Mena Massound',
            'born' => 'Mena Massound',
            'height' => '1.65 m',
            'image' => '/css/images/mena.jpg'
        ]);

        factory(App\Actor::class)->create([
            'name' => 'Naomi Scott',
            'fullname' => 'Lupita Amondi Nyongo',
            'born' => 'March 1, 1983 in Mexico City, Distrito Federal, Mexico',
            'height' => '1.65 m',
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
            'fullname' => 'Lupita Amondi Nyongo',
            'born' => 'March 1, 1983 in Mexico City, Distrito Federal, Mexico',
            'height' => '1.65 m',
            'image' => '/css/images/adam.jpg'
        ]);

        factory(App\Actor::class)->create([
            'name' => 'John Turturro',
            'fullname' => 'Lupita Amondi Nyongo',
            'born' => 'March 1, 1983 in Mexico City, Distrito Federal, Mexico',
            'height' => '1.65 m',
            'image' => '/css/images/turturro.jpg'
        ]);
    }
}
