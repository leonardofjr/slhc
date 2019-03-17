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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/services', 'Backend\ServicesController@create');
Route::put('/services/{id}', 'Backend\ServicesController@edit');
Route::delete('/services/{id}', 'Backend\ServicesController@destroy')->name('Delete');

Route::put( '/reviews/{id}', 'ReviewsController@update');
Route::post('/reviews', 'ReviewsController@store');
Route::delete('/reviews/{id}', 'ReviewsController@destroy');

Route::put('/settings/{id}', 'SettingsController@update');
Route::post('/reviews', 'ReviewsController@store');
Route::delete('/reviews/{id}', 'ReviewsController@destroy');
