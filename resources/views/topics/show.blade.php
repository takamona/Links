<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
    <title>プロフィール登録</title>
    <link rel="stylesheet" href="{{asset('css/topic_show.css')}}">
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
    <p><a href="/communities/{{$community->id}}/topics/{{$topic->id}}/edit">編集</a></p>
     <form method="POST" action="/communities/{{$community->id}}/topics/{{$topic->id}}">
      <input name="_method" type="hidden" value="DELETE"><input name="_token" type="hidden" value="{{ csrf_token() }}">
      <input type="submit" value="削除">
     </form>
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
     <ul class="post">
     @foreach($posts as $post)
     <li><img class="profile" src="{{asset('/uploads/' . $post->user->profile->image)}}"></li>
     <li class="content">{{$post->content}}</li><li class="name">{{$post->user->name}}さん</li><li class="day"><li class="aaaa">{{$post->created_at}}</li></li>
     @endforeach
     </ul>
  @if($participation->status === 1 )
      <form action="/posts" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="topic_id" value="{{$topic->id}}">
        <div class="name_empty"><textarea class="nametext" placeholder="記入" name="content"></textarea></div>
        <input type="submit" value="コメント投稿">
      </form>
  @endif
    <!--<div class="topic">-->
    <!--  <div class="icon"></div>-->
    <!--  <div class="time"></div>-->
    <!--  <div class="honbun">-->
    <!--    <div class="title"></div>-->
    <!--  </div>-->
    <!--</div>-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
  </body>
</html>