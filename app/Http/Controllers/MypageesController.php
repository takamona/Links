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
    // public function index()
    // {

    //     try {
    //         // $url = config('newsapi.news_api_url') . "top-headlines?country=us&category=business&apiKey=" . config('newsapi.news_api_key');
    //         $url = "https://news.google.com/rss?hl=ja&gl=JP&ceid=JP:ja";
    //         $method = "GET";
    //         $count = 15;

    //         $client = new Client();
    //         $response = $client->request($method, $url);

    //         // レスポンスのステータスコードを確認
    //         if ($response->getStatusCode() !== 200) {
    //             // ステータスコードが200以外の場合のエラーハンドリング
    //             dd("Failed to fetch news. Status Code: " . $response->getStatusCode());
    //         }

    //         $rssContent = $response->getBody()->getContents();

    //         $rss = simplexml_load_string($rssContent);

    //         if (!$rss || !isset($rss->channel->item)) {
    //             // RSSデータが正しくない場合のエラーハンドリング
    //             dd("No articles found in RSS feed.");
    //         }

    //         $news = [];
    //         $items = $rss->channel->item;
    //         $goutteClient = new GoutteClient();
           
    //         foreach ($items as $item) {
    //         $link = (string)$item->link;
    //         $thumbnail = null;

    //             // サムネイル画像を取得（ニュースリンクのメタタグをスクレイピング）
    //             $crawler = $goutteClient->request('GET', $link);
    //             $thumbnail = $crawler->filter('meta[property="og:image"]')->count() > 0
    //                 ? $crawler->filter('meta[property="og:image"]')->attr('content')
    //                 : null; // og:imageがない場合はnull

    //             $news[] = [
    //             'name' => (string)$item->title,
    //             'url' => $link,
    //             'thumbnail' => $thumbnail ?? '/path/to/default-thumbnail.jpg', // サムネイルがない場合のデフォルト画像
    //             ];
    //         }
            
    //     } catch (RequestException $e) {
    //         \Log::error("Error fetching thumbnail for URL: $link. Error: " . $e->getMessage());
    //     }

    //     $user = \Auth::user();

    //     $profile = $user->profile()->first();

    //     $community = Community::first();

    //     if ($community === null) {
    //         $community = new Community();
    //         $community->name = 'sample';
    //     }

    //     $participation = $community->participations()->where('user_id', \Auth::id())->where('status', 1)->first();

    //     if ($participation === null) {
    //         $participation = new Participation();
    //         $participation->status = 3;
    //     }

    //     // viewの呼び出し
    //     return view('mypage', compact('profile', 'user', 'participation', 'news'));
    // }
    
    
//     public function index()
// {
//     try {
//         // Google News RSS Feed URL
//         $url = "https://news.google.com/rss?hl=ja&gl=JP&ceid=JP:ja";
//         $client = new Client();
//         $response = $client->request('GET', $url);

//         // レスポンスのステータスコードを確認
//         if ($response->getStatusCode() !== 200) {
//             throw new \Exception("Failed to fetch news. Status Code: " . $response->getStatusCode());
//         }

//         $rssContent = $response->getBody()->getContents();
//         $rss = simplexml_load_string($rssContent);

//         if (!$rss || !isset($rss->channel->item)) {
//             throw new \Exception("No articles found in RSS feed.");
//         }

//         $news = [];
//         $items = $rss->channel->item;
//         $goutteClient = new GoutteClient();

//         foreach ($items as $item) {
//             $link = (string)$item->link; // ニュース記事のリンク
//             $thumbnail = '/path/to/default-thumbnail.jpg'; // デフォルトのサムネイル画像

//             try {
//                 // 記事リンクをリダイレクト先を含めて取得
//                 $response = $client->request('GET', $link, ['allow_redirects' => true]);
//                 $finalUrl = $response->getHeader('Location')[0] ?? $link;

//                 // 記事ページをスクレイピング
//                 $crawler = $goutteClient->request('GET', $finalUrl);
//                 $html = $crawler->html();

//                 // og:image を優先して取得
//                 if ($crawler->filter('meta[property="og:image"]')->count() > 0) {
//                     $thumbnail = $crawler->filter('meta[property="og:image"]')->attr('content');
//                 } else {
//                     // og:image がない場合、<img> タグから最初の画像を取得
//                     $images = $crawler->filter('img')->each(function ($node) {
//                         return $node->attr('src');
//                     });
//                     if (!empty($images)) {
//                         $thumbnail = $images[0];
//                     }
//                 }
//             } catch (\Exception $e) {
//                 \Log::error("Error fetching thumbnail for URL: $link. Error: " . $e->getMessage());
//             }

//             // ニュース情報を配列に格納
//             $news[] = [
//                 'name' => (string)$item->title,
//                 'url' => $link,
//                 'thumbnail' => $thumbnail,
//             ];
//         }
//     } catch (\Exception $e) {
//         \Log::error("Error fetching news: " . $e->getMessage());
//         $news = []; // エラー発生時は空のニュースリストを返す
//     }

//     // ユーザー情報
//     $user = \Auth::user();
//     $profile = $user->profile()->first();

//     // コミュニティ情報
//     $community = Community::first() ?? new Community(['name' => 'sample']);
//     $participation = $community->participations()
//         ->where('user_id', \Auth::id())
//         ->where('status', 1)
//         ->first() ?? new Participation(['status' => 3]);

//     // View の呼び出し
//     return view('mypage', compact('profile', 'user', 'participation', 'news'));
// }

public function index()
{
    try {
        // Google News RSS Feed URL
        $url = "https://news.google.com/rss?hl=ja&gl=JP&ceid=JP:ja";
        $client = new Client();
        $response = $client->request('GET', $url);

        // レスポンスのステータスコードを確認
        if ($response->getStatusCode() !== 200) {
            throw new \Exception("Failed to fetch news. Status Code: " . $response->getStatusCode());
        }

        $rssContent = $response->getBody()->getContents();
        $rss = simplexml_load_string($rssContent);

        if (!$rss || !isset($rss->channel->item)) {
            throw new \Exception("No articles found in RSS feed.");
        }

        $news = [];
        $items = $rss->channel->item;

        foreach ($items as $item) {
            $link = (string)$item->link; // ニュース記事のリンク

            // ニュース情報を配列に格納
            $news[] = [
                'name' => (string)$item->title,
                'url' => $link,
                'thumbnail' => $thumbnail ?? '/path/to/default-thumbnail.jpg', // サムネイルがない場合のデフォルト画像
            ];
        }
    } catch (\Exception $e) {
        \Log::error("Error fetching news: " . $e->getMessage());
        $news = []; // エラー発生時は空のニュースリストを返す
    }

    // ユーザー情報
    $user = \Auth::user();
    $profile = $user->profile()->first();

    // コミュニティ情報
    $community = Community::first() ?? new Community(['name' => 'sample']);
    $participation = $community->participations()
        ->where('user_id', \Auth::id())
        ->where('status', 1)
        ->first() ?? new Participation(['status' => 3]);

    // View の呼び出し
    return view('mypage', compact('profile', 'user', 'participation', 'news'));
}
    
    
public function updateAjax(Request $request)
    {
        $user = Auth::user();
        //プロフィール情報を取得するなければ作成
        $profile = $user->profile()->first() ?? new \App\Models\Profile();

        // バリデーション
        $request->validate([
            'name' => 'required|string|max:10',
            'hobby' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:10',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $imageUpdated = false;
        // 画像アップロード処理
        if ($request->hasFile('profile_image')) {
            $path = $request->file('profile_image')->store('uploads', 'public');

            // 古い画像を削除
            if ($profile->image) {
                Storage::disk('public')->delete($profile->image);
            }

            $profile->image = $path;
            $imageUpdated = true;
        }

        //usersテーブルの名前を更新
        $user->name = $request->name;
        $user->save();

        // プロフィール更新
        $profile->hobby = $request->hobby;
        $profile->introduction = $request->introduction;
        $profile->address = $request->address;
        $profile->user_id = $user->id;
        $profile->save();

        // return response()->json([
        //     'message' => 'プロフィールを更新しました',
        //     'profile' => $profile
        // ]);

        return response()->json([
            'message' => 'プロフィールを更新しました',
            'user' => $user,
            'image_updated' => $imageUpdated,
            'profile' => [
                //`null` を正しく返す処理、imageUpdatedがtrueであれば画像をセットそうでなければnullにする。
                'image' => $imageUpdated ? asset('storage/' . $profile->image) : null, 
                'hobby' => $profile->hobby,
                'address' => $profile->address
            ]
        ]);
    }    
}
