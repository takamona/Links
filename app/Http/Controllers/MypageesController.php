<?php

namespace App\Http\Controllers;

use App\User;

use App\Community;

use App\Participation;

use App\Profile;

use Auth;

use Illuminate\Http\Request;

use GuzzleHttp\Client;

use GuzzleHttp\Exception\RequestException;

use GuzzleHttp\Psr7;

class MypageesController extends Controller
{
    
    // Mypage表示
    public function index()
    {
        
        try {
            $url = config('newsapi.news_api_url') . "top-headlines?country=jp&category=business&apiKey=" . config('newsapi.news_api_key');
            $method = "GET";
            $count = 15;

            $client = new Client();
            $response = $client->request($method, $url);

            $results = $response->getBody();
            $articles = json_decode($results, true);

            $news = [];

            for ($id = 0; $id < $count; $id++) {
                array_push($news, [
                    'name' => $articles['articles'][$id]['title'],
                    'url' => $articles['articles'][$id]['url'],
                    'thumbnail' => $articles['articles'][$id]['urlToImage'],
                ]);
            }
        } catch (RequestException $e) {
            echo Psr7\Message::toString($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\Message::toString($e->getResponse());
            }
        }
        
        $user = \Auth::user();
        
        $profile = $user->profile()->first();
        
        $community = Community::first();
        
        if($community===null){
        $community = new Community();
        $community->name = 'sample';
        }
        
        $participation = $community->participations()->where('user_id', \Auth::id())->where('status', 1)->first();
        
        if($participation===null){
        $participation = new Participation();
        $participation->status = 3;
        }
        
        // viewの呼び出し
        return view('mypage', compact('profile','user', 'participation','news'));
    }

}
