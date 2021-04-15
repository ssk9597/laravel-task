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

//TOP(Route->View)
Route::get('/', function () {
    return view('welcome');
});

//Register(Route->Controller->View)
Route::get("/register", "RegisterController@index");

//Login(Route->Controller->View)
Route::get("/login", "LoginController@index");
