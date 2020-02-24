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

//Route::get('/about', 'AboutController@about');
Route::get('/', 'ArticleController@showArticle')->name('index');
Route::get('/about', [
    'as'=>'aboutone',
    'uses'=>'ArticleController@about'
]);
Route::get('/articleOne/{article}' , [
    'as' => 'articleOne',
    'uses'=>'Articlecontroller@articleOne'
]);
Route::post('/addarticle', [
    'as'=>'addArticle',
    'uses'=>'ArticleController@addArticle'
]);

Route::get('/addtext', [
    'as'=>'addtext',
    'uses'=>'ArticleController@addtext'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/article-change/{article}' , [
    'as' => 'article-change',
    'uses'=>'Articlecontroller@articleChange'
]);
Route::post('/article-save/{article}' , [
    'as' => 'article-save',
    'uses'=>'Articlecontroller@articleSave'
]);
Route::get('/article-delete/{article}' , [
    'as' => 'article-delete',
    'uses'=>'Articlecontroller@articleDelete'
]);
Route::get('/article-menu' , [
    'as' => 'article-menu',
    'uses'=>'Articlecontroller@showMyArticle'
]);
Route::get('/addCategoriesView', [
    'as'=>'addCategoriesView',
    'uses'=>'CategoriesController@addCategoriesView'
]);
Route::post('/addCategoriesForm', [
    'as'=>'addCategoriesForm',
    'uses'=>'CategoriesController@addCategoriesForm'
]);
Route::post('/categories-save/{categories}' , [
    'as' => 'categories-save',
    'uses'=>'CategoriesController@categoriesSave'
]);
Route::get('/category/{category}', [
    'as' => 'category',
    'uses' => 'ArticlesController@category'
]);
