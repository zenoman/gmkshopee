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
Route::get('list-kirim/{id}','api@getket');
Route::post('up-kirim','api@upstat');
Route::post('up-tarik','api@uptarik');
Route::post('login','api@login');
Route::post('up-login','api@upakun');
Route::get("kiriman",'api@kiriman');
