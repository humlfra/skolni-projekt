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


Route::get('/home', function () {
    return view('home');


});

    Route::get('/home2', function () {
        return view('home2');


});

Route::auth();

/* Zobrazení tabulky pacienti, navstevy, pojistovny */

Route::get('/tabulka_navstevy','tabulkanavstevyController@index');

Route::get('/tabulka_pacienti','tabulkapacientiController@index');

Route::get('/tabulka_pojistovny','tabulkapojistovnyController@index');

/* Edit tabulka pacienti */

Route::get('/tabulka_pacienti_edit/','tabulkapacientieditController@index');

Route::get('/tabulka_pacienti_edit/{id}','tabulkapacientieditController@show');

Route::post('/tabulka_pacienti_edit/{id}','tabulkapacientieditController@edit');

/* Delete tabulka pacienti */

Route::get('/tabulka_pacienti_delete','tabulkapacientideleteController@index');

Route::get('/tabulka_pacienti_delete/{id}','tabulkapacientideleteController@destroy');

/* Delete tabulka pojistovny */

Route::get('/tabulka_pojistovny_delete','tabulkapojistovnydeleteController@index');

Route::get('/tabulka_pojistovny_delete/{id}','tabulkapojistovnydeleteController@destroy');

/* Insert tabulka pacienti */

Route::get('/tabulka_pojistovny_insert','tabulkapojistovnyinsertController@insertform');
Route::post('/tabulka_pojistovny_insert','tabulkapojistovnyinsertController@insert');

/* Edit tabulka pojistovny */

Route::get('/tabulka_pojistovny_edit/','tabulkapojistovnyeditController@index');

Route::get('/tabulka_pojistovny_edit/{id}','tabulkapojistovnyeditController@show');

Route::post('/tabulka_pojistovny_edit/{id}','tabulkapojistovnyeditController@edit');

Route::get('/home', 'HomeController@index');
