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
	  $article=array(
	  	'id' => 2,
	  	'title'=> "Super experience",
	  	'averageEco' => "12% économie",
	  	'describe' => "Une bonne pratique des conseils et astuces donne de bon resultat",
	  	'like' => "0",
	  	'created_at' => "15-09-2017",
	  )
	  	;
	  $article2=array(
	  	'id' => 3,
	  	'title'=> "Génial",
	  	'averageEco' => "14% économie",
	  	'describe' => "la clé est detenue dans la rigueur des conseils ",
	  	'like' => "0",
	  	'created_at' => "14-09-2017",
	  )
	  	;	

    return view('blog', ['article'=>$article], ['article2'=>$article2]);
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
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/resultat', function () {
    return view('resultat');
});