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

Route::resource('game', 'GameController');

Route::resource('users', 'UsersController');

Route::resource('sessions', 'SessionsController');

Route::get('logout', 'SessionsController@destroy');