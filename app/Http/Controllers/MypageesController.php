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

use Goutte\Client as GoutteClient;

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

            $news = [];
            $items = $rss->channel->item;
            $goutteClient = new GoutteClient();
           
            foreach ($items as $item) {
            $link = (string)$item->link;
            $thumbnail = null;

                // サムネイル画像を取得（ニュースリンクのメタタグをスクレイピング）
                $crawler = $goutteClient->request('GET', $link);
                // $thumbnail = $crawler->filter('meta[property="og:image"]')->count() > 0
                //     ? $crawler->filter('meta[property="og:image"]')->attr('content')
                //     : null; // og:imageがない場合はnull
                    
                    
                var_dump($crawler->filter('meta[property="og:image"]')->count()); // 0または1
var_dump($crawler->filter('meta[property="og:image"]')->attr('content')); // og:imageがある場合、URLを確認

                $news[] = [
                'name' => (string)$item->title,
                'url' => $link,
                'thumbnail' => $thumbnail ?? '/path/to/default-thumbnail.jpg', // サムネイルがない場合のデフォルト画像
                ];
            }
            
        } catch (RequestException $e) {
            \Log::error("Error fetching thumbnail for URL: $link. Error: " . $e->getMessage());
        }

        $user = \Auth::user();

        $profile = $user->profile()->first();

        $community = Community::first();

        if ($community === null) {
            $community = new Community();
            $community->name = 'sample';
        }

        $participation = $community->participations()->where('user_id', \Auth::id())->where('status', 1)->first();

        if ($participation === null) {
            $participation = new Participation();
            $participation->status = 3;
        }

        // viewの呼び出し
        return view('mypage', compact('profile', 'user', 'participation', 'news'));
    }
}
