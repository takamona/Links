<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>プロフィール登録</title>
  <link rel="stylesheet" href="{{asset('/css/community_event.css')}}">
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
    <div class="e">イベントを探す！</div>
    <div class="kn"><input placeholder="イベントを検索！"></div>
  </div>
  <div class="comyuicon"></div>
  <div class="pobutton">
    <div class="sanka">参加する</div>
  </div>
  <div class="gr">
    <div><a href="community_top.html">トップ</a></div>
    <div><a href="community_topics.html">トピックス</a></div>
    <div class="yellow">イベント</div>
    <div><a href="community_approval.html">承認・コミュニティ参加申請・フレンド申請</a></div>
  </div>
  <div class="bar"></div>
  <div class="eventdisplay">
  <div class="eventplace"></div>
  <div class="eventdate"></div>
  <div class="detail"></div>
  <div class="honbun"></div>
  </div>
  <div class="eventdisplay2">
  <div class="eventplace2"></div>
  <div class="eventdate2"></div>
  <div class="detail2"></div>
  <div class="honbun2"></div>
  </div>
  <div class="eventdisplay3">
  <div class="eventplace3"></div>
  <div class="eventdate3"></div>
  <div class="detail3"></div>
  <div class="honbun3"></div>
  </div>
  <div class="eventdisplay4">
  <div class="eventplace4"></div>
  <div class="eventdate4"></div>
  <div class="detail4"></div>
  <div class="honbun4"></div>
  </div>
  <div class="eventdisplay5">
  <div class="eventplace5"></div>
  <div class="eventdate5"></div>
  <div class="detail5"></div>
  <div class="honbun5"></div>
  </div>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>