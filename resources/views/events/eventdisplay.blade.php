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
  イベント{{ count($events) }}件
  <table class="deta">
    <tr><th>イベントID</th><th>コミュニティ名<th>ユーザー名</th><th>タイトル</th><th>内容</th><th>作成日</th></tr>
    @foreach($events as $event)
    <tr><th>{{$event->id}}</th><th>{{$event->community->name}}</th><th>{{$event->user->name}}</th><th>{{$event->title}}</th><th>{{$event->content}}</th><th>{{$event->created_at}}</th></tr>
    @endforeach
  </table>
</body>
</html>