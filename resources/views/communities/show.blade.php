<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>プロフィール登録</title>
  <link rel="stylesheet" href="{{ asset('/css/community_show.css')}}">
  </head>
<body>
  <div class="po">
    <nav>
      <ul class="nav">
        <li> <a href="/mypage">マイページ</a> <img class="top" src={{ asset("images/komyu.jpeg")}}> </li>
      </ul>
    </nav>
    <ul class="logout">
      <li> <a href="/logout">ログアウト</a> </li>
    </ul>
  </div>
  <div class="flex">
    <div class="e">コミュニティトップ</div>
    <div class="kn"><input placeholder="コミュニティを検索！"></div>
  </div>
  <div class="comyuicon"><img class="sample" src="{{ asset('/uploads')}}/{{$community->image}}"></div>
  <div class="pobutton">
    @if($community->user_id !== Auth::id() && Auth::user()->is_participate($community->id) === false)
    <div class="sanka">
      <a href="/participations/create?id={{ $community->id }}">コミュニティの参加申請のページへ</a>
    </div>
  </div>
  @endif
  <div class="gr">
    <div class="yellow">トップ</div>
    <div><a href="/topics?id={{ $community->id }}">トピックス</a></div>
    <div><a href="community_event.html">イベント</a></div>
    <div><a href="/participations/index?id{{ \Auth::id() }}">承認・コミュニティ参加申請・フレンド申請</a></div>
  </div>
  <div class="bar"> </div>
  <div class="syosai"> </div>
  <div class="setumei"> </div>
  <div class="re">
    <div class="k"> 　管理人:{{$community->user->name}}</div>
    <div class="member"> 　参加メンバー </div>
    <div class="icon"> 　参加者アイコン </div>
    <div class="member_confirmation"><a href="community_member.html">メンバーを見る</a></div>
    <div class="day"> 開設日 ○○年 ○○月○○日 </div>
  </div>
  <div class="grid">
    @foreach($participations as $participation)
    <div class="photoA"><img class="syoki" src="{{ asset('/uploads/' . $participation->profile->image)}}">
  </div>
    @endforeach
    </div>
  </div>
  <div class="grid2">
    <div class="photoB"> <img class="syoki" src="{{ asset('images/smiley.png')}}"> </div>
    <div class="photoB"> <img class="syoki" src="{{ asset('images/smiley.png')}}"> </div>
    <div class="photoB"> <img class="syoki" src="{{ asset('images/smiley.png')}}"> </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="profile.js"></script>
</body>
</html>