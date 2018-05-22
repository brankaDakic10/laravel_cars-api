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

Route::middleware('api')->get('/cars','CarsController@index');

Route::middleware('api')->get('/cars/{id}','CarsController@show');
Route::middleware('api')->post('/cars','CarsController@store');
Route::middleware('api')->put('/cars/{id}','CarsController@update');
Route::middleware('api')->delete('/cars/{id}','CarsController@destroy');

