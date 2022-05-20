<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>プロフィール登録</title>
  <link rel="stylesheet" href="{{asset('/css/community_event.css')}}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
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
    <div class="e">いいねしたイベント一覧</div>
  </div>
  <div class="comyuicon"></div>
  <div class="pobutton">
  
  <div class="bar"></div>
  <table class="table table-bordered table-striped">
  <tr>
  <th style="width: 50px">題名</th>
  <th style="width: 5opx">作成者</th>
  <th style="width: 50px">作成日</th>
  <th style="width: 50px">内容</th>
  </tr>
  <tr>
  @foreach($events as $event)
  <th style="width: 50px">{{ $event->title }}</th>
  <th style="width: 50px">{{ $event->user->name }}</th>
  <th style="width: 50px">{{ $event->created_at }}</th>
  <th style="width: 50px">{{ $event->content }}</th>
  </tr>
  @endforeach
  </table>
</body>
</html>