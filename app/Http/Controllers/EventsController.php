<?php

namespace App\Http\Controllers;

use App\Event;
use App\Community;
use App\Participation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $events = Event::get();
        //URLからコミュニティインスタンスを抜き出す。
        $community = Community::find($id);
        
        $participation = $community->participations()->where('user_id', \Auth::id())->where('status', 1)->first();
        
        
        if($participation===null){
         $participation = new Participation();
         $participation->status = 3;
         }
          
        return view("events.index", compact('participation','community', 'events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
        $community = Community::find($id);
        
        $event = new Event();
        
        return view("events.create", compact('community'));
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
        // validation        
        //for image ref) https://qiita.com/maejima_f/items/7691aa9385970ba7e3ed
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
            'community_id' => 'required',
            'image' => [
                'file',
                'mimes:jpeg,jpg,png'
            ]
        ]);
    
       // 入力情報の取得
        $title = $request->input('title');
        $content = $request->input('content');
        $community_id = $request->input('community_id');
        $file = $request->image;
    
        $event = new Event();
        $event->user_id = \Auth::id();
        $event->community_id = $community_id;
        $event->title = $title;
        $event->content = $content;
        // https://qiita.com/ryo-program/items/35bbe8fc3c5da1993366
        // 画像ファイルのアップロード
        if($file){
            // S3用
            $path = Storage::disk('s3')->putFile('/uploads', $file, 'public');
            // パスから、最後の「ファイル名.拡張子」の部分だけ取得
            $image = basename($path);
        }else{
            // 画像ファイルが選択されていなければ空の文字列をセット
            $image = '';
        }

         $event->save();
         
         
        // トップページへリダイレクト
        return redirect('/communities/' . $community_id . '/events ')->with('flash_message', 'イベントを作成しました');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show($event_id,$community_id)
    {
        $event = Event::find($event_id);
        
        $community =Community::find($community_id);
        
        $participation = $community->participations()->where('user_id', \Auth::id())->where('status', 1)->first();
        
        
        if($participation===null){
           $participation = new Participation();
           $participation->status = 3 ;
        }
        
        return view("events.show", compact('participation','community','event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
    
    public function  getOpenEvents()
    {
        $user = Auth::User();
        $events = Event::get();
        
        return view('events.eventdisplay', compact('events', 'user'));
    }
    
    
    
     public function getEventsBySearch($keyword)
    {
     //暫定
    $events = Event::query()
        ->where(function ($query) use ($keyword) {
            $query->where('title', 'like', '%' . $keyword . '%')
                ->orWhere('content', 'like', '%' . $keyword . '%');
        })
        ->orderBy('created_at', 'desc')
        ->get();

    return response()->json($events);
    }
    
}
