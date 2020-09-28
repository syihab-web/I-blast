<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/email/dashboard', 'EmailController@dashboard');
Route::resource('/email', 'EmailController');
Route::get('/email/{value}', 'EmailController@show');
Route::post('/email/sendMail', 'EmailController@sendMail');
Route::get('auth/{provider}', 'GoogleController@redirect');
Route::get('auth/{provider}/callback', 'GoogleController@callback');
