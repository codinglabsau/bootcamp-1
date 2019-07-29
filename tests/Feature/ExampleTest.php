<?php

namespace Tests\Feature;

use App\Actor;
use App\Movie;
use App\Quote;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
//        factory(Movie::class)->create([
//            'title' => 'jungle justices'
//        ]);

        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertDontSee('jungle justices');
    }
}
