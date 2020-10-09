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

//Route::get('/home', 'HomeController');

//Route::get('/about', 'AboutController');

//Route::get('/article/{id}', function($id){
//    return view('details', ['id' => $id]);
//});

//Route::get('/article', 'ArticleController');

// Route::get('/home', 'HomeController');

// Route::get('/home', 'HomeController@index');

Route::get('/about', 'AboutController');

Route::get('/article', 'ArticleController');

Route::get('/article/{id}', 'ArticleController@article');//->name('article.detail');

Route::get('/sosmed', 'SosmedController');

Route::get('/data', 'DataController');

Route::post('/data/create', 'DataController@create');

Route::get('/data/{id}/edit', 'DataController@edit');

Route::post('/data/{id}/update', 'DataController@update');

Route::get('/data/{id}/delete', 'DataController@delete');
//Route::get('/article/{id}', function($id){
//    return view('layout.details', ['id' => $id]);0
//});
// Route::get('/article/','ArticleController@test');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
