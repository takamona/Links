<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Pagination\LengthAwarePaginator;

use App\Community;

use App\User;

use App\Participation;

use App\Topic;

use App\Event;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;

use Psy\Command\WhereamiCommand;

class CommunitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // 全コミュニティデータを取得
        $communitiesQuery = Community::query();

        $keyword = $request->input('seach_community');

        if ($keyword) {
            $communitiesQuery->where(function ($query) use ($keyword) {
                $query->where("name", "like", "%" . $keyword . "%")
                      ->orWhere("genre", "like", "%" . $keyword . "%");
            });
        }

        $communitiesQuery->orderBy('created_at', 'desc');
        $communities = $communitiesQuery->paginate(11);

       return view("communities.index", compact('communities', 'user'));
    }


    public function getCommunitiesBySearch($keyword)
    {
     //暫定
    $communities = Community::query()
        ->where(function ($query) use ($keyword) {
            $query->where('name', 'like', '%' . $keyword . '%')
                ->orWhere('genre', 'like', '%' . $keyword . '%');
        })
        ->orderBy('created_at', 'desc')
        ->get();

    return response()->json($communities);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        
        // dd('create');
        
        //空のコミュニティインスタンス作成
        $community=new Community();
        //view の呼び出し
        return view("communities.create",compact('community'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //   dd('community store');
        // dd($request);
        // validation        
        // for image ref) https://qiita.com/maejima_f/items/7691aa9385970ba7e3ed
        $this->validate($request, [
            'name' => 'required',
            'genre' => 'required',
            'participation' => 'required',
            'authority' => 'required',
            'content' => 'required',
            'image' => [
                'required',
                'file',
                'mimes:jpeg,jpg,png'
            ]
        ]);
        
        
           // dd('OK');
        // 入力情報の取得
        $name = $request->input('name');
        $genre = $request->input('genre');
        $participation = $request->input('participation');
        $authority = $request->input('authority');
        $content = $request->input('content');
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
        \Auth::user()->communities()->create(['name' => $name, 'genre' => $genre, 'participation' => $participation, 'authority' => $authority, 'content' => $content, 'image' => $image]);
        $community = Community::orderBy('created_at', 'desc')->get()->first();
        $participation = new Participation();
        $participation->user_id = \Auth::id();
        $participation->community_id = $community->id;
        $participation->status = 1;
        $participation->save();
        // トップページへリダイレクト
        return redirect('/communities')->with('flash_message', 'コミュニティを作成しました');
        
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $community = Community::find($id);
         // 注目しているコミュニティのユーザーデータ取得
        $participations = $community->participations()->where('status', 1)->get();
        
        // $user = $community->user()->get()->first();
        // 注目しているユーザの投稿一覧取得
        // $posts = $user->posts()->orderBy('id', 'desc')->paginate(10);
        
        // dd('community show');
        return view('communities.show', compact('community','participations'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function edit(Community $community)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Community $community)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Community  $community
     * @return \Illuminate\Http\Response
     */
    public function destroy(Community $community)
    {
        //
    }
    
     public function member($id)
    {
        
        $community = Community::find($id);
        
        // view の呼び出し
        return view('communities.member', compact('community'));
    }
}
