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

Route::get('home', 'HomeController@index');

Route::get('/pages/', 'PagesController@index');
Route::get('/pages/about', 'PagesController@about');


//Route::model('song', 'App\Song'); // binding route to a model id
Route::bind('song', function($slug){
    return App\Song::where('slug', $slug)->first();
});

get('songs', 'SongsController@index');
get('songs/{song}', 'SongsController@show');
get('songs/{song}/edit', 'SongsController@edit');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
