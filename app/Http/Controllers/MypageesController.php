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
            // $url = config('newsapi.news_api_url') . "top-headlines?country=us&category=business&apiKey=" . config('newsapi.news_api_key');
            $url = "https://news.google.com/rss?hl=ja&gl=JP&ceid=JP:ja";
            $method = "GET";
            $count = 15;

            $client = new Client();
            $response = $client->request($method, $url);
            
            // レスポンスのステータスコードを確認
            if ($response->getStatusCode() !== 200) {
                // ステータスコードが200以外の場合のエラーハンドリング
                dd("Failed to fetch news. Status Code: " . $response->getStatusCode());
            }
            
            $rssContent = $response->getBody()->getContents();
            
            $rss = simplexml_load_string($rssContent);

            if (!$rss || !isset($rss->channel->item)) {
                // RSSデータが正しくない場合のエラーハンドリング
                dd("No articles found in RSS feed.");
            }

            // $results = $response->getBody()->getContents();
            $rssContent = $response->getBody()->getContents();
            // $articles = json_decode($results, true);
            
            // データが正しいか確認
            // if (!isset($articles['articles']) || empty($articles['articles'])) {
            //     // 記事が空の場合、デバッグ用のメッセージをログまたは画面に出力
            //     dd("No articles found. Response: ", $articles);
            // }

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
