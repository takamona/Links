<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
    <title>プロフィール登録</title>
    <link rel="stylesheet" href="./css/other.css">
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
    <div class="plofile"></div>
    <div class="friend">
      <ul>
        <li>フレンド一覧</li>
      </ul>
    </div>
    <div class="photogr">
      <div class="photoA">
        <img class="syoki" src="images/smiley.png" alt="フレンド">
      </div>
      <div class="photoA">
        <img class="syoki" src="images/smiley.png" alt="フレンド">
      </div>
      <div class="photoA">
        <img class="syoki" src="images/smiley.png" alt="フレンド">
      </div>
    </div>
    <div class="photogr2">
      <div class="photoB">
        <img class="syoki" src="images/smiley.png" alt="フレンド">
      </div>
      <div class="photoB">
        <img class="syoki" src="images/smiley.png" alt="フレンド">
      </div>
      <div class="photoB">
        <img class="syoki" src="images/smiley.png" alt="フレンド">
      </div>
    </div>
    <table class="example">
      <tr>
      <th colspan="2">プロフィール
      </th>
      </tr>
      <tr>
      <th>名前
      </th>
      <th>名前
      </th>
      </tr>
      <tr>
      <th>性別
      </th>
      <th>
      <input type="radio" name="sex" value="男性">男性 
      <input type="radio" name="sex" value="女性">女性
      </th>
      </tr>
      <tr>
      <th>住んでいる場所
      </th>
      <th>
      <tr>
      <th>趣味
      </th>
      <th>
      </th>
      </tr>
      <tr>
      <th>自己紹介
      </th>
      <th>
      <textarea placeholder="自己紹介"></textarea>
      </th>
      </tr>
    </table>
    <div class="blue">
      <div class="sinsei">フレンド申請 </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="profile.js"></script>
  </body>
</html>