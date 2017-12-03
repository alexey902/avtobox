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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'TaskController@index');
Route::get  ('request_form', 'TaskController@requestform');



Route::get  ('succes', 'TaskController@succesindex');
Route::get  ('regulations', 'TaskController@regulations');
Route::get  ('agreement', 'TaskController@agreement');



Route::post  ('request_form', 'TaskController@store');
Auth::routes();

Route::get('/home', 'TaskController@index');

// Маршруты аутентификации...
Route::auth();
Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
