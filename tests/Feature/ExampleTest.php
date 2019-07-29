<?php

namespace Tests\Feature;

use App\Actor;
use App\Movie;
use App\Director;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    use RefreshDatabase;

    /**
     * @test
     */
    public function movie_does_not_exist()
    {
        factory(Movie::class)->create();

        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertDontSeeText('jungle justices');
    }

    /**
     * @test
     */
    public function movie_can_not_navigate_to_movie_detail_page()
    {
        $response = $this->get("/movies/1");

        $response->assertStatus(404);
    }

    /**
     * @test
     */
    public function director_page_not_available()
    {
        $response = $this->get("director/1");

        $response->assertStatus(404);
    }

    /**
     * @test
     */
    public function actor_page_not_available()
    {
        $response = $this->get("actors/1");

        $response->assertStatus(404);
    }

    /**
     * @test
     */
    public function gets_all_movies()
    {
        $movie = factory(Movie::class)->create([
            'title' => 'MIB',
            'image' => 'images/mib.jpg'
        ]);

        $movie2 = factory(Movie::class)->create([
            'title' => 'Lion King',
            'image' => 'images/lion.jpg'
        ]);

        $response = $this->get('/');

        $response->assertStatus(200)
            ->assertSeeText($movie->title)
            ->assertSee($movie->image);

        $response->assertStatus(200)
            ->assertSeeText($movie2->title)
            ->assertSee($movie2->image);
    }

    /**
     * @test
     */
    public function movie_can_navigate_to_movie_detail_page()
    {
        $movie = factory(Movie::class)->create([
            'title' => 'Lion King',
            'image' => 'images/lion.jpg'
        ]);

        $response = $this->get("movies/$movie->id");

        $response->assertStatus(200)
            ->assertSeeText($movie->title)
            ->assertSee($movie->image);
    }

    /**
     * @test
     */
    public function director_page_available()
    {
        $director = factory(Director::class)->create();

        $response = $this->get("director/$director->id");

        $response->assertStatus(200);
    }

    /**
     * @test
     */
    public function actor_page_available()
    {
        $actor = factory(Actor::class)->create();

        $response = $this->get("actors/$actor->id");

        $response->assertStatus(200);
    }
}
