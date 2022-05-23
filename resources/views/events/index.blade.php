<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>イベント一覧</title>
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
  <div class="comyuicon"><img class= "sample" src="{{ asset('/uploads')}}/{{$community->image}}"></div>
  <div class="pobutton">
    <!--<div class="sanka">参加する</div>-->
  </div>
  
@if($participation->status === 1 )
  <div class="position_create">
  <div class="event_creat">
    <a href="/communities/{{$community->id}}/events/create">+新規作成</a>
  </div>
  </div>
@endif
  <div class="gr">
    <div><a href="/communities/{{$community->id}}">トップ</a></div>
    <div><a href="/communities/{{$community->id}}/topics">トピックス</a></div>
    <div class="yellow">イベント</div>
    <div><a href="/communities/{{$community->id}}/participations">承認・コミュニティ参加申請・フレンド申請</a></div>
  </div>
  <div class="bar"></div>
  @foreach($events as $event)
  <div class="eventdisplay">
  <div class="eventplace"><a href="/communities/{{$community->id}}/events/{{$event->id}}">{{ $event->title }}</a></div>
  <div class="eventdate">{{ $event->created_at }}</div>
  <div class="detail">イベント詳細</div>
  <div class="honbun">{{ $event->content }}</div>
  </div>
  @endforeach
  
  
  
  
  
  <!--<div class="eventdisplay2">-->
  <!--<div class="eventplace2"></div>-->
  <!--<div class="eventdate2"></div>-->
  <!--<div class="detail2"></div>-->
  <!--<div class="honbun2"></div>-->
  <!--</div>-->
  <!--<div class="eventdisplay3">-->
  <!--<div class="eventplace3"></div>-->
  <!--<div class="eventdate3"></div>-->
  <!--<div class="detail3"></div>-->
  <!--<div class="honbun3"></div>-->
  <!--</div>-->
  <!--<div class="eventdisplay4">-->
  <!--<div class="eventplace4"></div>-->
  <!--<div class="eventdate4"></div>-->
  <!--<div class="detail4"></div>-->
  <!--<div class="honbun4"></div>-->
  <!--</div>-->
  <!--<div class="eventdisplay5">-->
  <!--<div class="eventplace5"></div>-->
  <!--<div class="eventdate5"></div>-->
  <!--<div class="detail5"></div>-->
  <!--<div class="honbun5"></div>-->
  <!--</div>-->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>
</html>