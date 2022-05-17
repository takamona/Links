<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>タイムライン</title>
</head>
<body>
<link rel="stylesheet" href="{{asset('/css/timeline.css')}}" type="text/css" />
<div class="h">
  <span></span>
  <span></span>
  <span></span>
</div>
<div class="h2">
  <nav id="spmenu">
  <ul class="menu">
    <li>
      <a href="/mypage">
        <img src="{{ asset('images/MYPAGE.png')}}" alt="マイページ">
      </a>
    </li>
    <li>
      <a href="community.html">
        <img src="{{ asset('images/COMMUNITY.png')}}" alt="コミュニティ">
      </a>
    </li>
    <li>
      <a href="/timeline">
        <img src="{{ asset('images/TIMELINE.png')}}" alt="タイムライン">
      </a>
    </li>
    <li>
      <a href="/logout">
        <img src="{{ asset('images/LOGOUT.png')}}" alt="ログアウト">
      </a>
    </li>
    <li>
  </ul>
  </nav>
</div>
<div class="nav">
  <div class="mypage">
    <ul>
      <li><a href="/mypage">マイページ</a></li>
    </ul>
    <img class="myp" src="{{asset('images/komyu.jpeg')}}" alt="マイページ">
  </div>
  <div class="logout">
    <ul>
      <li><a href="/logout">ログアウト</a></li>
    </ul>
  </div>
</div>
<div class="profile">
  <img id="img" src="{{asset('images/profilesample.png')}}" alt="プロフィール">
</div>
<div class="topic">
  <div class="icon"></div>
  <div class="time"></div>
  <div class="honbun">
    <div class="title"></div>
  </div>
</div>
<div class="event">イベント一覧 
  <div class="list">
    <ul>
      <li>イベント</li>
    </ul>
    <div class="sagasu">イベントを探す </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="{{asset('./js/timeline.js')}}"></script>
</body>