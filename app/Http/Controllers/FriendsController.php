<?php

namespace App\Http\Controllers;

use App\User;

use App\Friend;

use Auth;

use App\Community;

use Illuminate\Http\Request;

class FriendsController extends Controller
{
    
     public function index()
    {
        
        
        
        
        
        
        
        
        
        
    }
    
    
    
     public function create()
    {
        
        // // view の呼び出し
        // return view('friends.create', compact());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        // dd($request);
        
    $friend = new Friend();
    
    $friend->user_id = \Auth::id();
    
    $user = User::find($id);
    
    $friend->friend_id = $user->id;
    
    
    return redirect('/communities/' . $community->id . '/users/' . $participation->user_id)->with('flash_message', 'フレンド申請を送りました。');
    
    
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // // dd($topic_id);
        // $community = Community::find($community_id);
        // $topic = Topic::find($topic_id);
        // $posts = $topic->posts()->get();
        // $participation = $community->participations()->where('user_id', \Auth::id())->where('status', 1)->first();
        
        
        // //if分岐
        // // もしまだ申請していなければ
        // if($participation === null){ 
        // $participation = new Participation();
        // $participation->status = 3; // 0, 1, 2 以外の適当な値
        // }
        
        // // view の呼び出し
        // return view('topics.show', compact('topic','posts', 'participation'));
    }
    
    
    
    
}
