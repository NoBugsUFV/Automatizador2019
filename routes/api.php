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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/user","UserController@index");
Route::get("/history","HistoryController@index");
Route::get("/funcionalidades","ProductController@getAll");
Route::get("/token/{token}","UserController@byToken");
Route::post("/login","UserController@login");

