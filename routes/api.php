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

Route::get('/queue', 'APIController@queue');
Route::post('/queue/join', 'APIController@queuejoin');
Route::post('/queue/check', 'APIController@queuecheck');
Route::get('/session', 'APIController@session');
Route::get('/presentation', 'APIController@presentation');
Route::get('/store', 'APIController@store');
Route::get('/news', 'APIController@news');
Route::get('/nowplaying', 'APIController@nowplaying');
Route::get('/endvideo', 'APIController@endvideo');
