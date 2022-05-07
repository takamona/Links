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
      <div class="e">トピックを探す</div>
      <div class="kn">
        <input placeholder="検索">
      </div>
    </div>
    <div class="bar"></div>
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
     <ul>
     @foreach($posts as $post)
     <li>{{$post->content}} {{$post->user->name}} {{$post->created_at}}</li>
     @endforeach
     </ul>
      <form action="/posts" method="POST">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="hidden" name="topic_id" value="{{$topic->id}}">
        <div class="name_empty"><textarea class="nametext" placeholder="記入" name="content"></textarea></div>
        <input type="submit" value="コメント投稿">
      </form>
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