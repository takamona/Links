<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>トピック一覧</title>
  <link rel="stylesheet" href="{{ asset('/css/topic_display.css')}}"  type="text/css" />
 </head> 
 <body>
    <div class="po">
      <nav>
        <ul class="nav">
          <li>
            <a href="/mypage">マイページ</a>
            <img class="top" src="{{ asset('images/komyu.jpeg')}}" alt="マイページ">
          </li>
        </ul>
      </nav>
      <ul class="logout">
        <li>
          <a href="/logout">ログアウト</a>
        </li>
      </ul>
    </div>
    <div class="flex">
      <div class="e">トピックを探す</div>
      <div class="kn">
        <input placeholder="検索">
      </div>
    </div>
    <div class="bar"></div>
    <div class="topic">
      <div class="icon"></div>
      <div class="time"></div>
      <div class="honbun">
        <div class="title"></div>
      </div>
    </div>
    <div class="topic">
      <div class="icon"></div>
      <div class="time"></div>
      <div class="honbun">
        <div class="title"></div>
      </div>
    </div>
    <div class="topic">
      <div class="icon"></div>
      <div class="time"></div>
      <div class="honbun">
        <div class="title"></div>
      </div>
    </div>
    <div class="topic">
      <div class="icon"></div>
      <div class="time"></div>
      <div class="honbun">
        <div class="title"></div>
      </div>
    </div>
    <div class="topic">
      <div class="icon"></div>
      <div class="time"></div>
      <div class="honbun">
        <div class="title"></div>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  </body>
</html>