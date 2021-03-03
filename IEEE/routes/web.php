<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

Route::get('/marcação', function () {
    return View::make('eventAdd');
});

Route::get('/inscrição', function () {
    return View::make('eventInsc');
});

Route::get('/candidatura', function () {
    return View::make('memberAdd');
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
    $members = App\Member::all();
    return view('aboutus')->with('branches', $branches)->with('members', $members);
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
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::post('/memberapplication', function (Request $request) {
    $new_application = new App\MemberApplication;

    $new_application->member_name = $request->member_name;
    $new_application->phone_number = $request->phone_number;
    $new_application->email = $request->email;
    $new_application->student_number = $request->student_number;
    $new_application->student_degree = $request->student_degree;
    $new_application->what_is_ieee = $request->what_is_ieee;
    $new_application->how_did_you_find_us = $request->how_did_you_find_us;
    $new_application->reason_to_join = $request->reason_to_join;
    $new_application->availability = $request->availability;
    $new_application->value_add = $request->value_add;
    $new_application->when_to_start = $request->when_to_start;

    $new_application->save();
    $members = App\Member::all();
    return View::make('homepage')->with('members', $members);
});

