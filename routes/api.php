<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('habbit', 'HabbitController@index');
Route::get('habbit/{id}', 'HabbitController@show');
Route::post('habbit', 'HabbitController@store');
Route::put('habbit/{id}', 'HabbitController@update');
Route::delete('habbit/{id}', 'HabbitController@destroy');

Route::get('category', 'CategoryController@index');
Route::get('category/{id}', 'CategoryController@show');
Route::post('category', 'CategoryController@store');
Route::put('category/{id}', 'CategoryController@update');
Route::delete('category/{id}', 'CategoryController@destroy');