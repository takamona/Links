<?php

namespace App\Http\Controllers;

use App\Community;
use App\Participation;
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
        
        $community = Community::first();
        
        $participation = $community->participations()->where('user_id', \Auth::id())->where('status', 1)->first();
        
        
        $user = \Auth::user();
        
        $profile = $user->profile()->first();
        
         if($participation===null){
         $participation = new Participation();
         $participation->status = 3;
         }
        
        return view('timeline.timeline', compact('topics','events','participation','profile','user'));
    }
    
}
