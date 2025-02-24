<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
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
          @if($participation->status === 1 && $participation->status === ! null)
          <a href="/communities/{{ \Auth::id() }}">
            <img class="community" src="{{ asset('images/COMMUNITY.png')}}" alt="コミュニティ">
          </a>
        </li>
        @endif
        <li>
          @if($participation->status === 1 && $participation->status === ! null)
          <a href="/getOpenTopics_Events">
            <img src="{{ asset('images/TIMELINE.png')}}" alt="タイムライン">
          </a>
        </li>
        @endif
        <li>
          <a href="/logout">
            <img src="{{ asset('images/LOGOUT.png')}}" alt="ログアウト">
          </a>
        </li>
      </ul>
    </nav>
  </div>

  <!-- <div class="mypage">
      <ul>
       <li>
          <a href="mypage">マイページ</a>
        </li>
      </ul>
      <img class="myp" src="{{ asset('images/komyu.jpeg')}}" alt="マイページ">
    </div> -->
  <!-- <div class="nav">
     <div>プロフィール</div>
     <div>タイムライン</div>
     <div>ログアウト</div>
    </div> -->
  <div class="logout">
    <ul>
      <li>
        <!-- <a href="/logout">ログアウト</a> -->
        <img id="logphoto" src="{{ asset('uploads/' . $profile->image) }}" alt="ログアウト">
      </li>
    </ul>
  </div>
  <div class="profile_window_position">
    <div class="profile_window_parent">
      <div class="profile_window">
        <div class="profile">
          <img class="sample" src="{{ asset('uploads/' . $profile->image) }}" alt="プロフィール">
        </div>
      </div>
      <p class="username"> {{$user->name}}さん</p>
      <!-- <a class="spana_a" href="/profiles/{{ \Auth::id() }}">プロフィールを見る
        <img class="spana" src="{{ asset('images/spana.png')}}" alt="編集">
      </a> -->
      <div class="spana_a">プロフィール
        <img class="spana" src="{{ asset('images/spana.png')}}" alt="編集">
      </div>
    </div>
  </div>
  <div class="pro_2_position">
    <div class="profile_window_2">
      <p>工事中</p>
    </div>
  </div>
  <!-- <div class="margin_window">a</div> -->
  <div class="nav">
    <div class="profile_nav"><a href="/profiles/{{ \Auth::id() }}">プロフィール</a></div>
    @if($participation->status ===1 && $participation->status === ! null)
    <div><a href="/getOpenTopics_Events">タイムライン</a></div>
    @endif
    <div><a href="/logout">ログアウト</a></div>
  </div>
  <div class="gr_position">
    <!-- <div class="margin"> -->
    <div class="gr">
      <div class="event_">
        <img class="event" src="{{ asset('images/audience.jpg')}}" alt="イベント">
        <a href="/getOpenEvents">
          <p>イベント</p>
        </a>
      </div>
      <div class="event_join">
        <img class="event2" src="{{ asset('images/audience.jpg')}}" alt="参加予定のイベント">
        <a href="/favorites/{{ \Auth::id() }}">
          <p>いいねしたイベント</p>
        </a>
      </div>
    </div>
    <div class="gr2">
      <div class="grborder">
        <img class="komyuran2" src="{{ asset('images/chairs.jpg')}}" alt="コミュニティ一覧">
        <a href="/communities">
          <p>コミュニティ一覧</p>
        </a>
      </div>
      <div class="grborder2">
        <img class="topic" src="{{ asset('images/glasses-book.jpg')}}" alt="トピック一覧">
        <a href="/getOpenTopics">
          <p>トピック一覧</p>
        </a>
      </div>
    </div>
  </div>
  <!-- </div> -->
  <div class="position_click">
    <div class="click_menu">
      <div class="click_profile"><a href="/profiles/{{ \Auth::id() }}">プロフィールを表示</a></div>
      <div class="click_logout"><a href="/logout">ログアウト</a></div>
    </div>
  </div>
  <div id="dark_profile">
    <form action="{{ route('profile_edit') }}" id="dark_profile form" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div id="profile_edit">
       <div id="gap"> 
        <p id="close_profile">×</p>
        <p id="profile_edit_title">プロフィールを編集</p>
       </div> 
        <button type="submit" id="dark_submit">保存</button>
      </div>
      <img id="sample_instoroduction" src="{{ asset('uploads/' . $profile->image) }}" alt="プロフィール">
      <!-- <div id="profile_waku_instroduction"> -->
      <div id="border_name">
        <div id="profile_name">
          名前
        </div>
        <!-- <p id="user_name_"> -->
        <input type="text" name="name" id="user_name" value="{{ \Auth::user()->name }}">
        <!-- </p> -->
      </div>
      <!-- </div> -->
      <div id="profile_hobby_waku">
        <div id="profile_hobby">
          趣味
        </div>
        <!-- <p id="profile_hobby_child"> -->
        <input type="text" name="hobby" id="profile_hobby_child" value="{{ $profile->hobby }}">
        <!-- </p> -->
      </div>
      <div id="profile_introduction_waku">
        <div id="profile_introduction">
          自己紹介
        </div>
        <!-- <p id="profile_hobby_child"> -->
        <input type="text" name="introduction" id="profile_introduction_child" value="{{ $profile->introduction }}">
        <!-- </p> -->
      </div>
      <div id="profile_hometown_waku">
        <div id="profile_hometown">
          場所
        </div>
        <!-- <p id="profile_hometown_child"> -->
        <input type="text" name="address" id="profile_hometown_child" value="{{ $profile->address }}">
        <!-- </p> -->
      </div>
    </form>
  </div>
  <div class="user_position">
    <p class="username_click">{{$user->name}}さん</p>
    <div class="news">news</div>
    <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('/js/mypage.js')}}"></script>
    <script src="{{ asset('/js/menu.js')}}"></script>
</body>

</html>