<?php

namespace App\Http\Controllers;

use App\Participation;
use Illuminate\Http\Request;

class ParticipationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //空のpaticipationインスタンス作成
        $participations = Participation::all();
        //モデルを使って、全データを取得
        $participations = Participation::paginate(30);
    
        return view("participations.index", compact('participations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('create');
        
        //空の申請インスタンス作成
        $participation=new Participation();
         //view の呼び出し
        
        //
        $community = $participation->communities()->where('orderBy',id)->get();
        
        
        return view("participations.create",compact('participation','community'));
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
            'status' => 'required',
        ]);
        
        
           // dd('OK');
        // 入力情報の取得
        $status = $request->input('status');
        
        
        // 入力情報をもとに新しいインスタンス作成
        \Auth::user()->participations()->create(['status' => $status]);
        
        
        
        
        
        
        
        // トップページへリダイレクト
        return redirect('/participations')->with('flash_message', '参加申請を作りました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function show(Participation $participation)
    {
        
        
        
        
        
        
        
        
        
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function edit(Participation $participation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participation $participation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participation $participation)
    {
        //
    }
}
