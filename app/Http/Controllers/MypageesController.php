<?php

namespace App\Http\Controllers;

use App\User;

use App\Profile;

use Auth;

use Illuminate\Http\Request;

class MypageesController extends Controller
{
    
    // Mypage表示
    public function index()
    {
        $user = \Auth::user();
        
        $profile = $user->profile()->first;
        
        $community = Community::first();
        
        $participation = $community->participations()->where('user_id', \Auth::id())->where('status', 1)->first();
        
        
        if($participation===null){
        $participation = new Participation();
        $participation->status = 3;
        }
        
        // viewの呼び出し
        return view('mypage', compact('profile','user', 'participation'));
    }


}
