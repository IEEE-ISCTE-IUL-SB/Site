<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use \Mailjet\Resources;
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

/*Route::get('/MAE', function () {
    $events = getSocietyEvents("MAE");
    return View::make('societies/mae')->with('events', $events);
});*/


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

/*Route::get('/projetos', 'ProjectController@index');

Route::get('/projetos/{id}',['as' => 'single', 'uses' => 'ProjectController@single']);*/



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

    $highlightedtags = $highlightedtags->unique('tag_name');

    return View::make('eventos')->with('highlights', $highlights)->with('nextevents', $nextevents)->with('pastevents', $pastevents)->with('highlightedtags', $highlightedtags);
});


Route::get('/evento/{id}', function ($id) {
    $event = App\Event::all()->where('id', $id)->first();
    $openregistrations = $event->event_date . $event->event_time > Carbon::now();
    return View::make('eventodetalhe')->with('event', $event)->with('openregistrations', $openregistrations);
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

Route::get('/candidatura', function () {
    return View::make('memberAdd');
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

    return redirect('/');
});

Route::post('/eventregistration/{id}', function (Request $request, $id) {
    $event = App\Event::all()->where('id', $id)->first();
    if ($event->event_date . $event->event_time > Carbon::now()) {
        $new_attendant = new App\EventRegistration;

        $new_attendant->insc_name = $request->insc_name;
        $new_attendant->insc_email = $request->insc_email;
        $attendant_university = $request->insc_uni;
        if (strcmp($attendant_university, "") == 0)
        {
            $attendant_university = $request->insc_uni_other;
        }
        $new_attendant->insc_university = $attendant_university;
        $attendant_degree = $request->insc_degree;
        if (strcmp($attendant_degree, "") == 0)
        {
            $attendant_degree = $request->insc_degree_other;
        }
        $new_attendant->insc_degree = $attendant_degree;
        $new_attendant->insc_year = $request->insc_year;
        $new_attendant->event_id = $id;

        $new_attendant->save();
        return redirect('/evento/'.$id);
    }
    else
        return redirect('/eventos');
});

Route::get('/inscricao/{id}', function ($id) {
    $event = App\Event::all()->where('id', $id)->first();
    return View::make('eventInsc')->with('event', $event);
});


Route::get('/propostaevento', function () {
    return View::make('eventAdd');
});

Route::post('/eventsuggestion', function (Request $request) {
    $suggested_event = new App\EventSuggestion;

    $suggested_event->contact_name = $request->contact_name;
    $suggested_event->contact_email = $request->contact_email;
    $suggested_event->contact_org = $request->contact_org;

    $new_event_type = $request->event_type;
    if (strcmp($new_event_type, "") == 0)
    {
        $new_event_type = $request->event_type_other;
    }
    $suggested_event->event_type = $new_event_type;

    $suggested_event->event_description = $request->event_description;

    $suggested_event->save();


    $emailcontent = [
        'contact_name' => $suggested_event->contact_name,
        'contact_email' => $suggested_event->contact_email,
        'contact_org' => $suggested_event->contact_org,
        'event_type' => $suggested_event->event_type,
        'event_description' => $suggested_event->event_description,
        ];

    Mail::to('josempereira141@gmail.com')->send(new \App\Mail\NewEventSuggestion($emailcontent));

    return redirect('/eventos');
});


