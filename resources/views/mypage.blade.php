<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>マイページ</title>
  <link rel="stylesheet" href="../css/mypage.css" type="text/css" />
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
          <a href="#">
            <img src="https://school3.oohara.jp/taka/%e3%82%b3%e3%83%9f%e3%83%a5%e3%83%8b%e3%83%86%e3%82%a3/TOP.png" alt="トップページ">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="https://school2.oohara.jp/fukuro/miraculous/b_header_movie.png" alt="ムービー">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="https://school2.oohara.jp/fukuro/miraculous/b_header_news.png" alt="ニュース">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="https://school2.oohara.jp/fukuro/miraculous/b_header_character.png" alt="キャラクター">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="https://school2.oohara.jp/fukuro/miraculous/b_header_story.png" alt="ストーリー">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="https://school2.oohara.jp/fukuro/miraculous/b_header_schedule.png" alt="スケジュール">
          </a>
        </li>
        <li>
          <a href="#">
            <img src="https://school2.oohara.jp/fukuro/miraculous/b_header_goods.png" alt="グッズ">
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="nav">
    <div class="mypage">
      <ul>
       <li>
          <a href="mypage.html">マイページ</a>
        </li>
      </ul>
      <img class="myp" src="images/komyu.jpeg" alt="マイページ">
    </div>
    <div class="logout">
      <ul>
         <li>
          {!! link_to_route('logout.get', 'ログアウト', []) !!}
        </li>
      </ul>
    </div>
  </div>
  <div class="profile">
    <img id="img" src="images/profilesample.png" alt="プロフィール">
  </div>
  <div>
    <a href="myprofile.html">プロフィールを見る</a>
  </div>
  <div class="gr">
   <div>
      <img class="event" src="images/audience.jpg" alt="イベント">
      <a href="eventdisplay.html"><p>イベント</p></a>
    </div>
    <div>
      <img class="event2" src="images/audience.jpg" alt="参加予定のイベント">
      <p><a href="join_community_display.html">参加予定のイベント</a></p>
    </div>
  </div>
  <div class="gr">
    <div>
      <img class="komyuran2" src="images/chairs.jpg" alt="コミュニティ一覧">
      <a href="comyunity.html"><p><a href="community.html">コミュニティ一覧</a></p></a>
    </div>
    <div>
      <img class="topic" src="images/glasses-book.jpg" alt="トピック一覧">
      <p><a href="topicdisplay.html">トピック一覧</a></p>
    </div>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  <script src="./js/mypage.js"></script>
</body> 