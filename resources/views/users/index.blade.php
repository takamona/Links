<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>マイページ</title>
  <link rel="stylesheet" href="{{ asset('/css/community_member.css')}}" type="text/css" />
  </head>
<body>
   <div class="po">
    <nav>
      <ul class="nav">
        <li> <a href="/mypage">マイページ</a> <img class="top" src="{{ asset('images/komyu.jpeg')}}" alt="マイページ"> </li>
      </ul>
    </nav>
    <ul class="logout">
      <li> <a href="/logout">ログアウト</a> </li>
    </ul>
  </div>
  <div class="gr">
    <div><a href="/communities">トップ</a></div>
    <div><a href="/communities/{{ $community->id }}/topics">トピックス</a></div>
    <div>イベント</div>
    @if($community->user_id===Auth()::id)
    <div class="yellow"><a href="/communities/{{$community->id}}/participations/create">承認・コミュニティ参加申請・フレンド申請</a></div>
    @endif
  </div>
  <div class="bar"> </div>
  <div class="comyunity"> メンバー一覧 </div>
  <div class="white"></div>
  <div class="grey"></div>
  <div class="grid">
    <div class="photoA"> <img class="syoki" src="images/smiley.png" alt="フレンド"> </div>
    <div class="photoA"> <img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoA"> <img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoA"> <img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoA"> <img class="syoki" src="images/smiley.png" alt="フレンド"></div>
  </div>
  <div class="grid">
    <div class="photoB"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoB"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoB"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoB"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoB"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
  </div>
  <div class="grid">
    <div class="photoC"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoC"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoC"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoC"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoC"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
  </div>
  <div class="grid">
    <div class="photoD"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoD"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoD"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoD"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoD"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
  </div>
  <div class="grid">
    <div class="photoE"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoE"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoE"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoE"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
    <div class="photoE"><img class="syoki" src="images/smiley.png" alt="フレンド"></div>
  </div>
  <div class="white2"></div>
  <div class="grey2"> </div>
</body>