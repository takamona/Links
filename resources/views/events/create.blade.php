<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>イベント編集削除</title>
  <link rel="stylesheet" href="{{ asset('/css/event_post.css')}}"type="text/css" />
  <link rel="stylesheet" href="https://school.oohara.jp/oohara/fullcalendar.css" type="text/css" />
</head>
<body>
  <!-- fullcalendar-3.10.0 -->
  <!-- 必要jsの読み込み -->
  <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/moment.min.js'></script>
  <script src='https://fullcalendar.io/releases/fullcalendar/3.9.0/lib/jquery.min.js'></script>
  <script src="https://school.oohara.jp/oohara/fullcalendar.js"></script>
  <nav>
  <ul class="nav">
    <li>
      <a href="#top">TOP</a>
      <img class="top" src="images/top.jpg">
    </li>
    <li>
      <a href="#login">ログイン</a>
      <img class="komyu" src="images/login.jpg">
    </li>
    <li>
      <a href="#mypage">マイページ</a>
      <img class="myp" src="images/komyu.jpeg">
    </li>
  </ul>
  </nav>
  <div class="border"></div>
  <div class="osirase">
    <ul>
      <li>
        <img class="pencil" src="images/pencil.png">○○のイベント
      </li>
    </ul>
  </div>
  <div class="gmain">
    <div class="kaku">
      <table border="3">
        <tr>
        <th class="nkaku">
        <div class="pe">
          <input type="button" value="イベント投稿" class="modoru">
          <div>
            <img class="pencil2" src="images/pencil.png">
          </div>
        </div>
        </th>
        </tr>
      </table>
      <div class="calendar">
        <div id="cal"></div>
      </div>
    </div>
    <div></div>
    <div class="title">
      <div class="bitiran">
        <table border="3">
          <tr>
          <th colspan=2>イベント一覧
          </th>
          <th>
        </div>
        <tr>
        <th colspan=2>
        <input type="checkbox" name="check">全てチェックする 
        <tr>
        <th colspan=2>
        <input type="checkbox" name="check">タイトル　
        <div>編集する</div>
        <tr>
        <th>日記
        </th>
        <th>
        <input placeholder="タイトル" class="tc">
        </th>
        </tr>
        <tr>
        <th>本文
        </th>
        <th>
        <textarea placeholder="本文" class="honbun"></textarea>
        </th>
        <tr>
        <th>写真
        </th>
        <th>
        <div id="upload">
          <img id="img" src="images/profilesample.png">
          <div class="up1">画像を変更する</div>
          <div style="display:none">
            <input type="file" id="uploadFile2">
          </div>
        </div>
        </th>
        </tr>
        <tr>
        <th>公開範囲
        </th>
        <td>
        <input type="radio" name="koukai">全体に公開 
        <input type="radio" name="koukai">友人まで 
        <input type="radio" name="koukai">お気に入り 
        </td>
        </tr>
        <tr>
        <td colspan=2 class="r">
        <input type="button" class="re" value="入力内容を確認する">
      </table>
    </div>
  </div>
  <div class="over">
    <div>投稿してもよろしいでしょうか？ 
      <br>
      <input type="button" value="投稿">
      <input type="button" value="戻る" class="modoru">
    </div>
  </div>
  <div class="nikkikaku"></div>
  <script src="{{ asset('/js/event_post.js')}}"></script>
</body>