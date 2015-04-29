<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'WelcomeController@index');

// Can do get or Post, etc...
Route::get('/songs/search', 'SongsController@search');
// Correspend a URL to a controller and a method. 

Route::get('/songs', 'SongsController@results');

