<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>トピック一覧</title>
  <link rel="stylesheet" href="{{ asset('/css/topic_display.css')}}"  type="text/css" />
 </head> 
 <body>
   <div class="po">
     <nav>
       <ul class="nav">
         <li> <a href="/mypage">マイページ</a> <img class="top" src="{{ asset('images/komyu.jpeg')}}" alt="マイページ"></li>
       </ul>
     </nav>
     <ul class="logout">
       <li> <a href="/logout">ログアウト</a> </li> 
     </ul>
   </div>
    <div class="flex">
     <div class="e">トピックスを探す</div>
     <div class="kn"><input placeholder="検索"></div>
    </div>
<div class="bar"> </div>
<p>トピックス {{ count($topics) }}件 </p> 
@foreach($topics as $topic)
<div class="topic">
  <div class="icon">
    <img class="icon_image" src="{{ asset('/uploads')}}/{{ $topic->image }}"alt="アイコン">
  </div>
  <div class="time">
    {{ $topic->created_at}}
  </div>
  <div class="honbun">
    {{ $topic->content}}  
    <div class="title">
    {{$topic->title}}
    </div>
  </div>
</div>
@endforeach
  </body>
</html>