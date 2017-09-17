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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/tuto', function () {
    return view('tuto');
});
Route::get('/philo', function () {
    return view('philo');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/event', function () {
    return view('event');
});
Route::get('/account', function () {
    return view('account');
});
Route::get('/Login', function () {
    return view('Login');
});
