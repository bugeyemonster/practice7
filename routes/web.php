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




Route::get('movielist', 'movieListController@index');
Route::get('actor-detail', 'ActorController@index');

Route::get('user', 'UserDetailController@index');

Route::get('/', 'Homepage_controller@index' );
Route::get('actorslist', 'ActorsListController@index');



