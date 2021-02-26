<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
use Illuminate\Http\Request;
use Carbon\Carbon;
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")

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
<<<<<<< HEAD
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

Route::get('/eventodetalhe', function () { //TODO turn into different route for each event
    return view('eventodetalhe');
});

Route::get('/search', function () { //TODO turn into different route for each search
    return view('resultadosprocura');
=======
    $members = App\Member::all();
    return View::make('homepage')->with('members', $members);
});

Route::get('/RAS', function () {
    $events = getSocietyEvents("RAS");
    return View::make('societies/ras')->with('events', $events);
});


Route::get('/IMS', function () {
    $events = getSocietyEvents("IMS");
    return View::make('societies/ims')->with('events', $events);
});

Route::get('/CS', function () {
    $events = getSocietyEvents("CS");
    return View::make('societies/CS')->with('events', $events);
});

Route::get('/WIE', function () {
    $events = getSocietyEvents("WIE");
    return View::make('societies/wie')->with('events', $events);
});

function getSocietyEvents($societyname) {
    $events = App\Event::all()->filter(function($event) use($societyname) {
        foreach($event->tags as $tag) {
                if (strcmp(strtolower($tag->tag_name), strtolower($societyname)) == 0) {
                    return true;
                }
        }
    });
    return $events;
}

Route::get('/projetos', 'ProjectController@index');
Route::get('/projetos/{id}',['as' => 'single', 'uses' => 'ProjectController@single']);



Route::get('/sobrenos', function () {
    $branches = App\StudentBranch::all();
    return view('aboutus')->with('branches', $branches);
});


Route::get('/eventos', function () {
    $highlights = App\Event::all()->where('highlighted', 1);

    $nextevents = App\Event::whereDate('event_date', '>', Carbon::yesterday())->get();

    $pastevents = App\Event::whereDate('event_date', '<', Carbon::today())->paginate(5);

    $highlightedtags = collect(new App\Tag);

    foreach($highlights as $event) {
        $highlightedtags = $highlightedtags->merge($event->tags);
    }

    return View::make('eventos')->with('highlights', $highlights)->with('nextevents', $nextevents)->with('pastevents', $pastevents)->with('highlightedtags', $highlightedtags);
});


Route::get('/evento/{id}', function ($id) {
    $event = App\Event::all()->where('id', $id)->first();
    return View::make('eventodetalhe')->with('event', $event);
});


Route::post('/search', function (Request $request) {
    $searchtext = $request->searchtext;
    $searchresults = App\Event::all()->filter(function($event) use($searchtext) {
        foreach($event->tags as $tag) {
            if (strcmp(strtolower($tag->tag_name), strtolower($searchtext)) == 0)
            {
                return true;
            }
        }
        return (str_contains(strtolower($event->event_name), strtolower($searchtext)));
    });
    return View::make('resultadosprocura')->with('searchtext', $searchtext)->with('searchresults', $searchresults);

});


Route::get('/search/{searchtext}', function ($searchtext) {
    $searchresults = App\Event::all()->filter(function($event) use($searchtext) {
        foreach($event->tags as $tag) {
            if (strcmp(strtolower($tag->tag_name), strtolower($searchtext)) == 0)
            {
                return true;
            }
        }
    });
    return View::make('resultadosprocura')->with('searchtext', $searchtext)->with('searchresults', $searchresults);
>>>>>>> parent of 572fe22 (Revert "Merge branch 'david' into main")
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
