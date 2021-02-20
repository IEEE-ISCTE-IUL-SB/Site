<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/evento/{id}', function ($id) { //TODO turn into different route for each event
    $event = App\Event::all()->where('id', $id)->first();
    return View::make('eventodetalhe')->with('event', $event);
});

Route::get('/search/{searchtext}', function ($searchtext) { //TODO turn into different route for each search

    $searchresults = App\Event::all()->filter(function($event) use($searchtext) {
        foreach($event->tags as $tag) {
            if (strcmp(strtolower($tag->tag_name), $searchtext) != 0)
            {
                return true;
            }
        }
        return (str_contains(strtolower($event->event_name), $searchtext));
    });
    return View::make('resultadosprocura')->with('searchtext', $searchtext)->with('searchresults', $searchresults);

});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
