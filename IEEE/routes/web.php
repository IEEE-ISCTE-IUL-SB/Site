<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PageController@index')->name('home');
Route::get('/team', 'PageController@team')->name('team');
Route::post('/', 'ArticleController@store');
Route::get('/', 'ArticleController@indexhome');


//Article
Route::get('/article/submit', 'ArticleController@create');
Route::post('/article', 'ArticleController@store');


//all
Route::get('/article', 'ArticleController@indexadmin');
Route::get('/article/all/{id}','ArticleController@show');
Route::get('/article/download/{file}','ArticleController@download');
Route::get('/about','PageController@about');
Route::post('/subscription','PageController@newsletter');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
