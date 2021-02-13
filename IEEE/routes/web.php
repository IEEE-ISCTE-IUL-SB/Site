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
Route::get('/', function () {
    return view('homepage');
});

Route::get('/RAS', function () {
    return view('societies/ras');
});

Route::get('/IMS', function () {
    return view('societies/ims');
});

Route::get('/CS', function () {
    return view('societies/cs');
});

Route::get('/WIE', function () {
    return view('societies/wie');
});

Route::get('/eventos', function () {
    return view('eventos');
});
Route::get('/projetos', function () {
    return view('projetos');
});

Route::get('/sobrenos', function () {
    return view('aboutus');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});