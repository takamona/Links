<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>メンバー一覧</title>
  <link rel="stylesheet" href="{{ asset('/css/community_member.css')}}" type="text/css" />
  </head>
<body>
   <div class="po">
    <nav>
      <ul class="nav">
        <li> <a href="/mypage">マイページ</a> <img class="top" src="{{ asset('images/komyu.jpeg')}}" alt="マイページ"> </li>
      </ul>
    </nav>
    <ul class="logout">
      <li> <a href="/logout">ログアウト</a> </li>
    </ul>
  </div>
  <div class="gr">
    <div><a href="/communities/{{ $community->id }}">トップ</a></div>
    <div><a href="/communities/{{ $community->id }}/topics">トピックス</a></div>
    <div><a href="/communities/{{ $community->id }}/events">イベント</a></div>
    <div class="yellow"><a href="/communities/{{$community->id}}/participations/">承認・コミュニティ参加申請・フレンド申請</a></div>
  </div>
  <div class="bar"> </div>
  <div class="comyunity"> メンバー一覧 </div>
  <div class="white"></div>
  <div class="grey"></div>
  <div class="grid">
    @foreach($participations as $participation)
    @continue($participation->id>5)
    <div class="photoA"><a href="/communities/{{$community->id}}/users/{{$participation->user_id}}">
      <img class="syoki" src="{{ asset('/uploads/' . $participation->user->profile->image)}}" alt="メンバー">
      </a>
    </div>
    @endforeach
  </div>
  <div class="grid">
    @foreach($participations as $participation)
    @continue($participation->id<6)
    @continue($participation->id>10)
    <div class="photoB"><a href="/communities/{{$community->id}}/users/{{$participation->user_id}}">
      <img class="syoki" src="{{ asset('/uploads/' . $participation->user->profile->image)}}" alt="メンバー">
      </a>
    </div>
    @endforeach
  </div>
  <div class="grid">
    @foreach($participations as $participation)
    @continue($participation->id<11)
    @continue($participation->id>15)
    <div class="photoC"><a href="/communities/{{$community->id}}/users/{{$participation->user_id}}">
      <img class="syoki" src="{{ asset('/uploads/' . $participation->user->profile->image)}}" alt="メンバー">
      </a>
    </div>
    @endforeach
  </div>
  <div class="grid">
    @foreach($participations as $participation)
    @continue($participation->id<16)
     @continue($participation->id>20)
    <div class="photoD"><a href="/communities/{{$community->id}}/users/{{$participation->user_id}}">
      <img class="syoki" src="{{ asset('/uploads/' . $participation->user->profile->image)}}" alt="メンバー">
      </a>
    </div>
    @endforeach
  </div>
   <div class="grid">
    @foreach($participations as $participation)
    @continue($participation->id<21)
    <div class="photoE"><a href="/communities/{{$community->id}}/users/{{$participation->user_id}}">
      <img class="syoki" src="{{ asset('/uploads/' . $participation->user->profile->image)}}" alt="メンバー">
      </a>
    </div>
    @endforeach
  </div>
  <div class="white2"> </div>
  <div class="grey2"> </div>
  <div class="null"> </div>
</body>