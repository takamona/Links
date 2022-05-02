<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
    <title>プロフィール登録</title>
    <link rel="stylesheet" href="{{ asset('css/topicdisplay.css')}}">
  </head>
  <body>
    <div class="po">
      <nav>
        <ul class="nav">
          <li>
            <a href="mypage.html">マイページ</a>
            <img class="top" src="images/komyu.jpeg" alt="マイページ">
          </li>
        </ul>
      </nav>
      <ul class="logout">
        <li>
          <a href="index.html">ログアウト</a>
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
    <div class="create_topic">
        <a href="topics/create">＋トピックス投稿</a>
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
    <div class="topic">
      <div class="icon"></div>
      <div class="time"></div>
      <div class="honbun">
        <div class="title"></div>
      </div>
    </div>
    <script src="{{ asset('https://code.jquery.com/jquery-3.3.1.min.js')}}"></script>
  </body>
</html>