<?php

namespace App\Http\Controllers;


use App\Topic;
use App\Event;
use Illuminate\Http\Request;

class TimelineController extends Controller
{
    
    public function  getOpenTopics_Events()
    {
        $topics = Topic::get();
        
        $topics = $topics->where('disdosure_range', 0);
        
        $events = Event::get();
        
        return view('timeline.timeline', compact('topics','events'));
    }
    
}
