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

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/moviePage', function () {
    return view('moviePage');
});
=======
Route::get('/actors/nyongo', function () {
   return view('actors.nyongo');
});
>>>>>>> 9328921fcb33bd20abf7ace30d0ded6a9dc0758e
