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
       
        
        // view の呼び出し
        return view('friends.index', compact('community'));
    }
    
    
    
     public function create()
    {
        
        // view の呼び出し
        return view('friends.create', compact());
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
            'disdosure_range' => 'required',
            'community_id' => 'required',
            'image' => [
                'required',
                'file',
                'mimes:jpeg,jpg,png'
            ]
        ]);
        
        // 入力情報の取得
        $title = $request->input('title');
        $content = $request->input('content');
        $disdosure_range = $request->input('disdosure_range');
        $community_id = $request->input('community_id');
        $file =  $request->image;
        
        // https://qiita.com/ryo-program/items/35bbe8fc3c5da1993366
        // 画像ファイルのアップロード
        if($file){
            // 現在時刻ともともとのファイル名を組み合わせてランダムなファイル名作成
            $image = time() . $file->getClientOriginalName();
            // アップロードするフォルダ名取得
            $target_path = public_path('uploads/');
            // アップロード処理
            $file->move($target_path, $image);
        }else{
            // 画像ファイルが選択されていなければ空の文字列をセット
            $image = '';
        }
        
        
        // 入力情報をもとに新しいインスタンス作成
        
        
        // トップページへリダイレクト
         return redirect('/friends')->with('flash_message', 'フレンド申請を送りました');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // dd($topic_id);
        $community = Community::find($community_id);
        $topic = Topic::find($topic_id);
        $posts = $topic->posts()->get();
        $participation = $community->participations()->where('user_id', \Auth::id())->where('status', 1)->first();
        
        
        //if分岐
        // もしまだ申請していなければ
        if($participation === null){ 
        $participation = new Participation();
        $participation->status = 3; // 0, 1, 2 以外の適当な値
        }
        
        // view の呼び出し
        return view('topics.show', compact('topic','posts', 'participation'));
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}
