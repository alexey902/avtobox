<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/', 'TaskController@index');

Route::get('/profile', function () {
    // Only authenticated users may enter...
})->middleware('auth.basic');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// From example of laravel.ru
//  Route::post('/task', 'TaskController@store');
  //Route::delete('/task/{task}', 'TaskController@destroy');

