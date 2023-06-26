<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>{{$user->name}}さんのマイページ</title>
  <link rel="stylesheet" href="{{ asset('css/mypage.css')}}" type="text/css" />
</head>
<body>
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
          @if($participation->status === 1)
          <a href="/communities/{{ \Auth::id() }}">
            <img  class="community" src= "{{ asset('images/COMMUNITY.png')}}" alt="コミュニティ">
          </a>
        </li>
            @endif
        <li>
          <a href="/getOpenTopics_Events">
            <img src="{{ asset('images/TIMELINE.png')}}" alt="タイムライン">
          </a>
        </li>
        <li>
          <a href="/logout">
            <img src="{{ asset('images/LOGOUT.png')}}" alt="ログアウト">
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="nav">
    <!-- <div class="mypage">
      <ul>
       <li>
          <a href="mypage">マイページ</a>
        </li>
      </ul>
      <img class="myp" src="{{ asset('images/komyu.jpeg')}}" alt="マイページ">
    </div> -->
    <div class="logout">
      <ul>
         <li>
          <!-- <a href="/logout">ログアウト</a> -->
          <img id="logphoto" src="{{ Storage::disk('s3')->url('uploads/' . $profile->image) }}"alt="ログアウト">
  </div>
        </li>
      </ul>
    </div>
  </div>
  
<div class="profile_window_parent">  
<div class="profile_window">
  <div class="profile">
  <img class="sample" src="{{ Storage::disk('s3')->url('uploads/' . $profile->image) }}"alt="プロフィール">
  </div>
  </div>
  <p class="username"> {{$user->name}}さん </p>
  <div class="profile_margin">
    <a class="spana_a" href="/profiles/{{ \Auth::id() }}">プロフィールを見る
    <img class="spana" src="{{ asset('images/spana.png')}}" alt="編集">
    </a>
    <!-- <a href="/profiles/{{ \Auth::id() }}">プロフィールを見る</a> -->
  </div>
</div>
<div class="profile_window_2">
  <p>工事中</p>
</div>

<div class="margin_window">a</div>
</div>
  <div class="margin">
  <div class="gr">
   <div>
      <img class="event" src="{{ asset('images/audience.jpg')}}" alt="イベント">
      <a href="/getOpenEvents"><p>イベント</p></a>
    </div>
    <div>
      <img class="event2" src="{{ asset('images/audience.jpg')}}" alt="参加予定のイベント">
      <a href="/favorites/{{ \Auth::id() }}"><p>いいねしたイベント</p></a>
    </div>
  </div>
  <div class="gr">
    <div>
      <img class="komyuran2" src="{{ asset('images/chairs.jpg')}}" alt="コミュニティ一覧">
      <a href="/communities"><p>コミュニティ一覧</p></a>
    </div>
    <div>
      <img class="topic" src="{{ asset('images/glasses-book.jpg')}}" alt="トピック一覧">
      <a href="/getOpenTopics"><p>トピック一覧</p></a>
    </div>
    </div>
  </div>
  <div class="position_click">
 <div class="click_menu">
 <div class="click_profile"><a href="/profiles/{{ \Auth::id() }}">プロフィールを表示</a></div>
 <div class="click_logout"><a href="/logout">ログアウト</a></div>
</div>
</div>
<p class="username_click"> {{$user->name}}さん </p>
<script src="{{ asset('https://code.jquery.com/jquery-3.3.1.min.js')}}"></script>
  <script src="{{ asset('/js/mypage.js')}}"></script>
  <script src="{{ asset('/js/menu.js')}}"></script>

</body> 