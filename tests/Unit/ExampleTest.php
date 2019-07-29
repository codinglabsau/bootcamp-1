<?php

namespace Tests\Unit;

use App\Actor;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function check_if_actor_exists()
    {
        $actor = factory(Actor::class)->create([
            'name' => 'Lupita Nyongo',
            'bio' => 'gfgfghj'
        ]);

        $this->assertEquals($actor->name, 'Lupita Nyongo');
        $this->assertTrue($actor->bio !== '');
    }
}
