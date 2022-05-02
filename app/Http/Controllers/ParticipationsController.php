<?php

namespace App\Http\Controllers;

use App\Participation;
use Illuminate\Http\Request;
use App\Community;


class ParticipationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
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
    public function create(Request $request)
    {
        // クエリパラメータより、参加を希望するコミュニティIDを取得
        $id = $request->input('id');
        // コミュニティインスタンスを取得
        $community = Community::find($id);
        //空の申請インスタンスの作成
        $participation = new Participation();
        
        //viewの呼び出し
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
        
        $community_id = $request->input('community_id');

        $participation = new Participation();
        
        $participation->community_id = $community_id;
        
        $participation->user_id = \Auth::id();
        
        $participation->save();
        
        // トップページへリダイレクト
        return redirect('/participations')->with('flash_message', '参加申請しました');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Participation  $participation
     * @return \Illuminate\Http\Response
     */
    public function show(Participation $participation)
    {
        
        
        
        
    //
    
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
