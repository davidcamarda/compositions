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



Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::resource('songs','SongController');
Route::resource('composers','ComposerController');
Route::resource('genres','GenreController');
Route::resource('instruments','InstrumentController');
Route::resource('lyrics','LyricController');
Route::resource('recordings','RecordingController');
Route::resource('subgenres','SubGenreController');
Route::resource('tools','ToolController');
Route::resource('vendors','VendorController');


Route::get('about','PagesController@about');
Route::get('generic','PagesController@generic');
Route::get('tool','PagesController@tool');
Route::get('contact','PagesController@contact');
Route::get('shred','PagesController@shred');

