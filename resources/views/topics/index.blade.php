<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>マイページ</title>
  <link rel="stylesheet" href="{{ asset('/css/community_topics.css')}}">
  </head>
<body>
  <div class="po">
    <nav>
      <ul class="nav">
        <li> <a href="/mypage">マイページ</a> <img class="top" src="{{('images/komyu.jpeg')}}" alt="マイページ"> </li>
      </ul>
    </nav>
    <ul class="logout">
      <li> <a href="/logout">ログアウト</a> </li>
    </ul>
  </div>
   <div class="flex">
    <div class="e">トピックスを探す</div>
    <div class="kn"><input placeholder="トピックスを検索！"></div>
  </div>
<div class="profile">
  <img id="img" src="{{ asset('images/profilesample.png')}}" alt="プロフィール">
</div>
<div class="topic_creat">
  <a href="topics/create">+トピック作成</a>
</div>
<div class="gr">
    <div><a href="community_top.html">トップ</a></div>
    <div class="yellow">トピックス</div>
    <div><a href="community_event.html">イベント</a></div>
    <div class><a href="participations/create">承認・コミュニティ参加申請・フレンド申請</a></div>
  </div>
  <div class="bar"> </div>
<div class="topic">
  <input type="button" value="返信する" class="reply"/>
  <div class="icon"></div>
  <div class="time"></div>
  <div class="honbun">
    <div class="title"></div>
  </div>
</div>
<div class="hidebutton">
  <textarea name="text" rows="6" cols="40" class="ttt"></textarea>
  <input type="button" value="返信"  class="replybt"style="background-color:#f0f8ff;font-size:15px;width:60px;height:50px;">
</div>
<div class="topic">
  <input type="button" value="返信する" class="reply"/>
  <div class="icon"></div>
  <div class="time"></div>
  <div class="honbun">
    <div class="title"></div>
  </div>
</div>
<div class="hidebutton">
<textarea name="text" rows="6" cols="40" class="ttt"></textarea>
  <input type="button" value="返信"  class="replybt"style="background-color:#f0f8ff;font-size:15px;width:60px;height:50px;">
</div>
<div class="topic">
  <input type="button" value="返信する" class="reply"/>
  <div class="icon"></div>
  <div class="time"></div>
  <div class="honbun">
    <div class="title"></div>
  </div>
</div>
<div class="hidebutton">
<textarea name="text" rows="6" cols="40" class="ttt"></textarea>
  <input type="button" value="返信"  class="replybt"style="background-color:#f0f8ff;font-size:15px;width:60px;height:50px;">
  </div>
<div class="topic">
  <input type="button" value="返信する" class="reply"/>
  <div class="icon"></div>
  <div class="time"></div>
  <div class="honbun">
    <div class="title"></div>
  </div>
</div>
<div class="hidebutton">
<textarea name="text" rows="6" cols="40" class="ttt"></textarea>
  <input type="button" value="返信"  class="replybt"style="background-color:#f0f8ff;font-size:15px;width:60px;height:50px;">
</div>
<div class="topic">
  <input type="button" value="返信する" class="reply"/>
  <div class="icon"></div>
  <div class="time"></div>
  <div class="honbun">
    <div class="title"></div>
  </div>
</div>
<div class="hidebutton">
<textarea name="text" rows="6" cols="40" class="ttt"></textarea>
  <input type="button" value="返信"  class="replybt"style="background-color:#f0f8ff;font-size:15px;width:60px;height:50px;">
</div>
<div class="nextbutton">
<div>
<input type="button" value="1" style="background-color:#ffffe0;font-size:15px;width:50px;height:30px;">
</div>
<div>
<input type="button" value="2" style="background-color:#ffffe0;font-size:15px;width:50px;height:30px;">
</div>
<div>
<input type="button" value="3" style="background-color:#ffffe0;font-size:15px;width:50px;height:30px;">
</div>
<div>
<input type="button" value="4" style="background-color:#ffffe0;font-size:15px;width:50px;height:30px;">
</div>
<div>
<input type="button" value="5" style="background-color:#ffffe0;font-size:15px;width:50px;height:30px;">
</div>
</div>
 <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('/js/community_topics.js')}}"></script>
</body>