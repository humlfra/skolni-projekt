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

Route::get('/', function () {
    return view('welcome');

});

    Route::get('/home2', function () {
        return view('home2');


});

Route::auth();

Route::get('/tabulka_navstevy','tabulkanavstevyController@index');
Route::get('/tabulkanavstevy','tabulkanavstevyController@index');

Route::get('/home', 'HomeController@index');
