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

/* ------- Přihlašování ----------*/

Route::auth();

/*------------ Zobrazení --------------------*/

/* Zobrazení tabulky pacienti, navstevy, pojistovny */

Route::get('/tabulka_navstevy','tabulkanavstevyController@index');

Route::get('/tabulka_pacienti','tabulkapacientiController@index');

Route::get('/tabulka_pojistovny','tabulkapojistovnyController@index');

/*------------ DELETE --------------------*/

/* Delete tabulka pacienti */

Route::get('/tabulka_pacienti_delete','tabulkapacientideleteController@index');

Route::get('/tabulka_pacienti_delete/{id}','tabulkapacientideleteController@destroy');

/* Delete tabulka nastevy */

Route::get('/tabulka_navstevy_delete','tabulkanavstevydeleteController@index');

Route::get('/tabulka_navstevy_delete/{id}','tabulkanavstevydeleteController@destroy');

/* Delete tabulka pojistovny */

Route::get('/tabulka_pojistovny_delete','tabulkapojistovnydeleteController@index');

Route::get('/tabulka_pojistovny_delete/{id}','tabulkapojistovnydeleteController@destroy');


/*------------ INSERT --------------------*/

/* Insert tabulka pacienti */

Route::get('/tabulka_pacienti_insert','tabulkapacientiinsertController@insertform');
Route::post('/tabulka_pacienti_insert','tabulkapacientiinsertController@insert');

/* Insert tabulka navstevy */

Route::get('/tabulka_navstevy_insert','tabulkanavstevyinsertController@insertform');
Route::post('/tabulka_navstevy_insert','tabulkanavstevyinsertController@insert');

/* Insert tabulka pojistovny */

Route::get('/tabulka_pojistovny_insert','tabulkapojistovnyinsertController@insertform');
Route::post('/tabulka_pojistovny_insert','tabulkapojistovnyinsertController@insert');

/*------------ EDIT --------------------*/

/* Edit tabulka pacienti */

Route::get('/tabulka_pacienti_edit/','tabulkapacientieditController@index');

Route::get('/tabulka_pacienti_edit/{id}','tabulkapacientieditController@show');

Route::post('/tabulka_pacienti_edit/{id}','tabulkapacientieditController@edit');

/* Edit tabulka navstevy */

Route::get('/tabulka_navstevy_edit/','tabulkanavstevyeditController@index');

Route::get('/tabulka_navstevy_edit/{id}','tabulkanavstevyeditController@show');

Route::post('/tabulka_navstevy_edit/{id}','tabulkanavstevyeditController@edit');

/* Edit tabulka pojistovny */

Route::get('/tabulka_pojistovny_edit/','tabulkapojistovnyeditController@index');

Route::get('/tabulka_pojistovny_edit/{id}','tabulkapojistovnyeditController@show');

Route::post('/tabulka_pojistovny_edit/{id}','tabulkapojistovnyeditController@edit');


Route::get('/home', 'HomeController@index');
