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

//Route::get('/about', 'AboutController@about');
Route::get('/', 'ArticleController@showArticle');
Route::get('/about', [
        'as'=>'aboutone',
        'uses'=>'ArticleController@about'
    ]);
Route::get('/articleOne/{id}' , [
    'as' => 'articleOne',
    'uses'=>'Articlecontroller@articleOne' ]);

