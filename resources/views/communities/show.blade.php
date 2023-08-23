<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>{{ $community->name }}のコミュニティ</title>
  <link rel="stylesheet" href="{{ asset('/css/community_show.css')}}">
  </head>
<body>

  <!-- <div class="po">
    <nav>
      <ul class="nav">
        <li> <a href="/mypage">マイページ</a> <img class="top" src="{{ asset('images/komyu.jpeg')}}"> </li>
      </ul>
    </nav>
    <ul class="logout">
      <li> <a href="/logout">ログアウト</a> </li>
    </ul>
  </div> -->

  <!-- <div class="flex">
    <div class="e">コミュニティトップ</div>
    <div class="kn"><input placeholder="コミュニティを検索！"></div>
  </div> -->

<div class="container2">
<div class="background">

<div class="comyuicon">
  <img class="sample" src="{{ Storage::disk('s3')->url('uploads/' . $community->image) }}"alt="コミュニティ画像">
</div>

<div class="community_name">{{ $community->name }}
</div>
</div>

</div>




  <div class="pobutton">
    @if($community->user_id !== Auth::id() && Auth::user()->is_participate($community->id) === false)
    <div class="sanka">
      <a href="/communities/{{ $community->id }}/participations/create">コミュニティの参加申請のページへ</a>
    </div>
  </div>
    @endif


    <a href="/communities"><p id="back"><img class="back_img"  src="{{ asset('images/back.png')}}">戻る</p></a>




<!-- <p class="mypage"><img src="{{ asset('images/home.png')}}" alt="マイページ"><a href="/mypage" class="mypage_link">マイページ</a></p>
<p class="tweet"><img src="{{ asset('images/tweet.png')}}" alt="トピック"><a href="/getOpenTopics" class="topic_link">トピック</a></p>
<p class="community_black"><img src="{{ asset('images/community_black.png')}}" alt="コミュニティ"><a href="/communities" class="communities_link">コミュニティ</a></p>
<p class="event_"><img src="{{ asset('images/event.png')}}" alt="イベント"><a href="/getOpenEvents" class="event_link">イベント</a></p> -->





<div class="container">

    
  <div class="gr">
    <div class="yellow">トップ</div>
    <div class="tp"><a href="/communities/{{ $community->id }}/topics">トピックス</a></div>
    <div class="ev"><a href="/communities/{{ $community->id }}/events">イベント</a></div>
    <div class="parti"><a href="/communities/{{ $community->id }}/participations">承認・コミュニティ参加申請・フレンド申請</a></div>
  </div>
  <div class="bar"> </div>
  <div class="syosai"> <p>コミュニティ詳細</p></div>
  <div class="setumei">{{ $community->content }}</div>
  <div class="re">
    <div class="name">コミュニティ名:{{ $community->name }}</div>
    <div class="k">  管理人:{{$community->user->name}}</div>
    <div class="member">  参加メンバー </div>
    <div class="icon">  参加者アイコン </div>
    <div class="member_confirmation"><a href= "/communities/{{ $community->id }}/users">メンバーを見る</a></div>
    <div class="day"> 開設日 {{ $community->created_at }} </div>
  </div>
  <div class="grid">
    @foreach($participations as $participation)
    <div class="photoA"><img class="syoki" src="{{ Storage::disk('s3')->url('uploads/' . $participation->user->profile->image) }}"alt="メンバー">
    </div>
    @endforeach
  </div>
  
  <div class="grid2">
    <div class="photoB"> <img class="syoki" src="{{ asset('images/smiley.png')}}"> </div>
    <div class="photoB"> <img class="syoki" src="{{ asset('images/smiley.png')}}"> </div>
    <div class="photoB"> <img class="syoki" src="{{ asset('images/smiley.png')}}"> </div>
  </div>
  


</div>

  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="profile.js"></script>
  <script>
  // const back = document.getElementById("back");
  // // back.addEventListener("click", function() {
  // //     // 前のページに戻る
  // //     history.back();
  // // });
  // back.addEventListener("click", function(){
  //     history.back();
  // });

  </script>
</body>
</html>