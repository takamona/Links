<?php

namespace App\Http\Controllers;

use App\User;

use App\Participation;

use App\Community;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
      $community = Community::find($id);
      
      $participations = $community->participations()->where('status', 1)->get();
      
    //   $participations_last = $participations->orderBy('created_at','desc')->get();
      
      return view('users.index', compact('community', 'participations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($community_id, $user_id)
    {
        // dd($community_id,$user_id);
        $community = Community::find($community_id);
        
        $user = User::find($user_id);
        
        // $profile = $user->profile()->first();
        
        $participation = $community->participations()->where('status', 1)->first();
        
        return view('users.show', compact('community', 'participation', 'user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
