<?php

namespace App\Http\Controllers;

use App\Actor;
use App\Movie;
use App\Quote;
use App\ActorMovie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::all();
        return view('movies.index')->with('movies', $movies);
    }

    /**
     * Display the specified resource.
     *
     * @param Movie $movie
     * @param Actor $actor
     * @return \Illuminate\Http\Response
     */
    public function show(Movie $movie, Actor $actor)
    {
        $movie->load('actors');
        $movie->load('quotes', 'quotes.actor');
        $actor->load('quotes');

        $director = $movie->director;
        $language = $movie->language;
        $actors = $movie->actors;
        $quotes = $movie->quotes;
//        dd($quotes);


        return view('movies.show')->with(compact('movie', 'director', 'language', 'actors', 'quotes'));
    }

    /**
     * Display the specified resource.
     *
     * @param Actor $actor
     * @return \Illuminate\Http\Response
     */
    public function actorPage(Actor $actor)
    {
        $actor->load('movies');

        $movies = $actor->movies;


        return view('actors.actorPage')->with(compact('actor', 'movies'));
    }
}
