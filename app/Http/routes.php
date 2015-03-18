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
Route::bind('songs', function($slug){
    return App\Song::where('slug', $slug)->first();
});
$router->resource('songs', 'SongsController');

// Route::get('articles','ArticlesController@index');
// Route::get('articles/create','ArticlesController@create');
// Route::get('articles/{id}/edit','ArticlesController@edit');
// Route::get('articles/{id}','ArticlesController@show');
// Route::post('articles', 'ArticlesController@store');

Route::resource('articles', 'ArticlesController');
// $router->resource('songs', 'SongsController', [
//     'only' => ['index', 'show', 'edit', 'update']
//     'except'=> []
// ]);

// Using named route
//get('songs', ['as' => 'songs_path', 'uses' => 'SongsController']);


// get('songs/{song}', 'SongsController@show');
// get('songs/{song}/edit', 'SongsController@edit');
// patch('songs/{song}', 'SongsController@update');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
