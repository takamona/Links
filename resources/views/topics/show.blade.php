<!DOCTYPE html>
<html lang="ja">
 <head>
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>プロフィール登録</title>
    <link rel="stylesheet" href="{{asset('css/topic_show.css')}}">
    
  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
  </head>
  <body>
    <div class="po">
      <nav>
        <ul class="nav">
          <li>
            <a href="/mypage">マイページ</a>
            <img class="top" src="{{asset('images/komyu.jpeg')}}" alt="マイページ">
          </li>
        </ul>
      </nav>
      <ul class="logout">
        <li>
          <a href="/logout">ログアウト</a>
        </li>
      </ul>
    </div>
    <div class="flex">
      <div class="e">トピック詳細・投稿ページ</div>
      <div class="kn">
        <input placeholder="検索">
      </div>
    </div>
    <div class="bar"></div>
    @if($topic->user->id === Auth::id())
    <p><a href="/communities/{{$community->id}}/topics/{{$topic->id}}/edit">編集ページへ</a></p>
     {!! Form::open(['route' => ['topics.destroy', 'id' => $community->id ,'topic' => $topic->id ],'method'=>'DELETE']) !!}
      {!! Form::submit('削除する', ['class' => 'btn btn-primary btn-lg']) !!}
      {!! Form::close() !!}
    @endif
     <table class="show">
      <tr><th>ID</th>
       <th>ユーザー名</th>
       <th>タイトル</th>
       <th>内容</th>
       <th>画像</th>
      </tr>
      <tr><th>{{$topic->id}}</th>
      <th>{{$topic->user->name}}</th>
      <th>{{$topic->title}}</th>
      <th>{{$topic->content}}</th>
      <th><img class="photo" src="{{ asset('/uploads/' . $topic->image)}}"></th>
      </tr>
     </table>
     <h2>投稿一覧</h2>
     <div class="border2">
     <ul class="post">
     @foreach($posts as $post)
     <li><img class="profile" src="{{asset('/uploads/' . $post->user->profile->image)}}"></li>
     <li class="content">{{$post->content}}</li><li class="name">{{$post->user->name}}さんのコメント</li><li class="day"><li class="border_">{{$post->created_at}}</li></li>
     @endforeach
     </ul>
     </div>
  @if($participation->status === 1 )
      <form action="/posts" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="topic_id" value="{{$topic->id}}">
        <div class="name_empty"><textarea class="nametext" placeholder="記入" name="content"></textarea></div>
        <div class="button_submit">
        <input type="submit" class="btn btn-primary btn-lg" value="コメント投稿">
        </div>
      </form>
  @endif
    <!--<div class="topic">-->
    <!--  <div class="icon"></div>-->
    <!--  <div class="time"></div>-->
    <!--  <div class="honbun">-->
    <!--    <div class="title"></div>-->
    <!--  </div>-->
    <!--</div>-->
  </body>
</html>