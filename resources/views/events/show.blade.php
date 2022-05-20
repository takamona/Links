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
    <div class="e">イベント情報</div>
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
  
  <table>
  <tr>
  <th>題名</th>
  <th>作成日</th>
  <th>内容</th>
  </tr>
  <tr>
  <th>{{ $event->title }}</th>
  <th>{{ $event->created_at }}</th>
  <th>{{ $event->content }}</th>
  </tr>
  </table>
  
   @if(!Auth::user()->is_favorite($event->id))
   {!! Form::open(['route' => ['events.favorite', 'id' => $event->id ]]) !!}
   {!! Form::submit('いいね', ['class' => 'btn btn-primary btn-block']) !!}
   {!! Form::close() !!}
  @else
   {!! Form::open(['route' => ['events.unfavorite', 'id' => $event->id ], 'method' => 'DELETE']) !!}
   {!! Form::submit('いいね解除', ['class' => 'btn btn-danger btn-block']) !!}
   {!! Form::close() !!}
   @endif
 
</body>
</html>




