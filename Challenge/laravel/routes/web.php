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
Route::get('/', 'WelcomeController@index');
Route::get('/', 'Vue1Controller@vue1');
Route::get('/', 'Vue2Controller@vue2');

Route::get('', function () {
    return view('welcome');
});
Route::get('welcome', function () {
    return view('welcome');
});

Route::get('vue1', function () {
    return view('vue1');
});

Route::get('vue2', function () {
    return view('vue2');
});
