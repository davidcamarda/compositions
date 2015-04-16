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

Route::get('bastard', 'BastardController@bastard');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::get('about','PagesController@about');
Route::get('generic','PagesController@generic');
Route::get('tool','PagesController@tool');
Route::get('contact','PagesController@contact');
Route::get('shred','PagesController@shred');


/*
|
| SONGS
|
*/
Route::get('songs','SongController@index');
Route::get('songs/create','SongController@create');
Route::post('songs','SongController@store');
Route::get('song/{id}','SongController@show');


/*
|
| COMPOSERS
|
*/
Route::get('composers','ComposerController@index');
Route::get('composers/create','ComposerController@create');
Route::post('composers','ComposerController@store');
Route::get('composer/{id}','ComposerController@show');


/*
|
| LYRICS
|
*/
Route::get('lyrics','LyricController@index');
Route::get('lyrics/create','LyricController@create');
Route::post('lyrics','LyricController@store');
Route::get('lyric/{id}','LyricController@show');


/*
|
| RECORDINGS
|
*/
Route::get('recordings','RecordingController@index');
Route::get('recordings/create','RecordingController@create');
Route::post('recordings','RecordingController@store');
Route::get('recording/{id}','RecordingController@show');

/*
|
| TOOLS
|
*/
Route::get('tools','ToolController@index');
Route::get('tools/create','ToolController@create');
Route::post('tools','ToolController@store');
Route::get('tool/{id}','SongController@show');


/*
|
| VENDORS
|
*/
Route::get('vendors','VendorController@index');
Route::get('vendors/create','VendorController@create');
Route::post('vendors','VendorController@store');
Route::get('vendor/{id}','VendorController@show');


/*
|
| INSTRUMENTS
|
*/
Route::get('instruments','InstrumentController@index');
Route::get('instruments/create','InstrumentController@create');
Route::post('instruments','InstrumentController@store');
Route::get('instrument/{id}','InstrumentController@show');

/*
|
| GENRES
|
*/
Route::get('genres','GenreController@index');
Route::get('genres/create','GenreController@create');
Route::post('genres','GenreController@store');
Route::get('genre/{id}','GenreController@show');