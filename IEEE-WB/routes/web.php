<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Controllers\Auth\RegisterController;

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
    return view('raspage');
});

Route::get('/IMS', function () {
    return view('imspage');
});

Route::get('/CS', function () {
    return view('cspage');
});

Route::get('/WIE', function () {
    return view('wiepage');
});







Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
