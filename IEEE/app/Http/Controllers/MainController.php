<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Event;


class MainController
{


    public function getSocietyEvents($societyname) {
        $events = Event::all()->filter(function($event) use($societyname) {
            foreach($event->tags as $tag) {
                    if (strcmp(strtolower($tag->tag_name), strtolower($societyname)) == 0) {
                        return true;
                    }
            }
        });
        return $events;
    }


    public function ras(){
        $events = $this->getSocietyEvents("RAS");
        return View::make('societies/ras')->with('events', $events);
    }
    public function ims(){
        $events = $this->getSocietyEvents("RAS");
    return View::make('societies/ras')->with('events', $events);
    }
    public function cs(){
        $events =  $this->getSocietyEvents("RAS");
        return View::make('societies/ras')->with('events', $events);
    }
    public function wie(){
        $events =  $this->getSocietyEvents("RAS");
        return View::make('societies/ras')->with('events', $events);
    }





}
