<?php

namespace App\Http\Controllers;

use App\Community;
use App\Topic;
use App\Participation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class TopicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        // dd($id);
        $community = Community::find($id);
 
        $topics = $community->topics()->get();

        $participation = $community->participations()->where('user_id', \Auth::id())->where('status', 1)->first();
        
        
        if($participation===null){
        $participation = new Participation();
        $participation->status = 3;
        }
        
        return view('topics.index', compact('community', 'topics', 'participation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        // dd($id);
        $community = Community::find($id);
        
        $participation = $community->participations()->where('user_id', \Auth::id())->where('status', 1)->first();
        
        // 空のトピックインスタンス作成
        $topic = new Topic();
        // view の呼び出し
        return view('topics.create', compact('community', 'topic', 'participation'));
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
            // // 現在時刻ともともとのファイル名を組み合わせてランダムなファイル名作成
            // $image = time() . $file->getClientOriginalName();
            // // アップロードするフォルダ名取得
            // $target_path = public_path('uploads/');
            // // アップロード処理
            // $file->move($target_path, $image);
            // S3用
            $path = Storage::disk('s3')->putFile('/uploads', $file, 'public');
            // パスから、最後の「ファイル名.拡張子」の部分だけ取得
            $image = basename($path);
        }else{
            // 画像ファイルが選択されていなければ空の文字列をセット
            $image = '';
        }
        
        
        // 入力情報をもとに新しいインスタンス作成
        // \Auth::user()->topic()->create(['title' => $title, 'content' => $content, 'disdosure_range' => $disdosure_range, 'image' => $image]);
        $topic = new Topic();
        $topic->user_id = \Auth::id();
        $topic->community_id = $community_id;
        $topic->title = $title;
        $topic->content = $content;
        $topic->disdosure_range = $disdosure_range;
        $topic->image = $image;
        
        $topic->save();
        
        // トップページへリダイレクト
        return redirect('/communities/' . $community_id . '/topics ')->with('flash_message', 'トピックを作成しました');

    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show($community_id, $topic_id)
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
        return view('topics.show', compact('topic','posts', 'participation','community'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $community_id, Topic $topic)
    {
        
        $topic = Topic::find($request->id);
        
        $community = Community::find($request->id);
          // ログインしている自分のトピックの場合
        if($topic->user_id === \Auth::id()){
            // view の呼び出し
            return view('topics.edit', compact('topic','community'));
        }else{
            return redirect('/mypage');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $community_id, Topic $topic)
    {
         // ログインしている自分のトピックの場合
        if($topic->user_id === \Auth::id()){
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
             
             
            // 画像ファイルのアップロード
            // https://qiita.com/ryo-program/items/35bbe8fc3c5da1993366
            if($file){
                // 現在時刻ともともとのファイル名を組み合わせてランダムなファイル名作成
                // $image = time() . $file->getClientOriginalName();
                // // アップロードするフォルダ名取得
                // $target_path = public_path('uploads/');
                // // アップロード処理
                // $file->move($target_path, $image);
                // S3用
                $path = Storage::disk('s3')->putFile('/uploads', $file, 'public');
                // パスから、最後の「ファイル名.拡張子」の部分だけ取得
                $image = basename($path);
            }else{
                // 画像を選択していなければ、画像ファイルは元の名前のまま
                $image = $topic->image;
            }
            
            //入力情報をもとにインスタンスのプロパティ変更
            $topic->title = $title;
            $topic->content = $content;
            $topic->disdosure_range = $disdosure_range;
            $topic->image = $image;
            
            // データベース更新
            $topic->save();
    
            // トップページへリダイレクト
            return redirect('/communities/' . $community_id . '/topics ')->with('flash_message', 'トピックを変更しました。');
        }else{
            return redirect('/communities/' . $community_id . '/topics ');
        }
            
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function destroy($community_id, Topic $topic)
    {
        // 注目している投稿がログインしているユーザーのものならば
        if($topic->user->id === \Auth::id()){
            // データベースから削除
            $topic->delete();
            // リダイレクト
            return redirect('/mypage')->with('flash_message', 'トピックid: ' . $topic->id . 'の投稿を削除しました。');
        }else{
            return redirect('/mypage');
        }
        
    }
    
    
    public function  getOpenTopics()
    {
        
        $topics = Topic::get();
        
        $topics = $topics->where('disdosure_range', 0);
        
        //
        
        return view('topics.display', compact('topics'));
    }
    
}