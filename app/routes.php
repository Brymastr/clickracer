<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'GameController@index');

Route::resource('game', ['before' => 'csrf', 'GameController']);

Route::post('users', ['before' => 'csrf', 'UsersController@store']);
Route::resource('users', 'UsersController');

Route::post('sessions', 'SessionsController@store');
Route::resource('sessions', 'SessionsController');

Route::get('logout', 'SessionsController@destroy');