<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
    <title>プロフィール登録</title>
    <link rel="stylesheet" href="./css/topic_show.css">
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
     <table class="show">
      <tr><th>ID</th>
       <th>ユーザーID</th>
       <th>タイトル</th>
       <th>内容</th>
       <th>画像</th>
      </tr>
      <tr><th>1</th>
      <th>1</th>
      <th>おはようございます</th>
      <th>今日もいい天気</th>
      <th>画像</th>
      </tr>
     </table>
      <form action="/posts" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">  
                    <div class="name_empty"><textarea class="nametext" placeholder="記入" name="name"></textarea></div>
    <!--<div class="topic">-->
    <!--  <div class="icon"></div>-->
    <!--  <div class="time"></div>-->
    <!--  <div class="honbun">-->
    <!--    <div class="title"></div>-->
    <!--  </div>-->
    <!--</div>-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  </body>
</html>