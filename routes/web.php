<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('actors-list', 'ActorsListController@index');
=======
Route::get('movielist', 'movieListController@index');

Route::get('actor-detail', 'ActorController@index');
>>>>>>> 5b30a8bd63bf6b7401fb09e92a79f5f9381905f6
