<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Movie;

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/', 'MovieController@index')->name('movies.index');
Route::get('/movies/{movie}', 'MovieController@show')->name('movies.show');
