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


Route::get('/Register', function () {
    return  view('auth/register');
})->name('register');

Route::get('/Home', function () {
    return  view('/home');
})->name('home');


Route::get('/Welcome', function () {
    return  view('/welcome');
})->name('welcome');


/* User Route*/
Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/auth.register', 'HomeController@index');
