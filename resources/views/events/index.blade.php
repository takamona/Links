<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>プロフィール登録</title>
  <link rel="stylesheet" href="{{asset('/css/eventdisplay.css')}}">
  </head>
<body>
  <div class="po">
    <nav>
      <ul class="nav">
        <li> <a href="/mypage">マイページ</a> <img class="top" src="{{asset('images/komyu.jpeg')}}" alt="マイページ"> </li>
      </ul>
    </nav>
    <ul class="logout">
      <li> <a href="/logout">ログアウト</a> </li>
    </ul>
  </div>
  <div class="flex">
    <div class="e">イベントを探す</div>
    <div class="kn"><input placeholder="検索"></div>
  </div>
  <div class="gr">
    <div class="yellow">イベント一覧</div>
    <div><a href="joinevent.html">参加予定のイベント</a></div>
    <div><a href="eventorganizer.html">主催イベント</a></div>
  </div>
  <div class="bar"> </div>
</body>
</html>