<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  
  <title>トピック一覧</title>
  <link rel="stylesheet" href="{{ asset('/css/topic_display.css')}}"  type="text/css" />
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"> -->
 </head> 
 <body>

   <!-- <div class="po" id="po">
     <nav>
       <ul class="nav" id="nav">
         <li> <a href="/mypage">マイページ</a> <img class="top" id="top" src="{{ asset('images/komyu.jpeg')}}" alt="マイページ"></li>
       </ul>
     </nav>
     <ul class="logout" id="logout">
       <li> <a href="/logout">ログアウト</a> </li> 
     </ul>
   </div> -->

   <div class="logout">
      <ul>
         <li>
          <!-- <a href="/logout">ログアウト</a> -->
          <img id="logphoto" src="{{ Storage::disk('s3')->url('uploads/' . $user->profile->image) }}" alt="ログアウト">
        </li>
      </ul>
    </div>


<!-- <div class="profile_window_position">
<div class="profile_window_parent">
  <div class="profile_window">
  <div class="profile">
  <img class="sample" src="{{ Storage::disk('s3')->url('uploads/' . $user->profile->image) }}" alt="プロフィール">
  </div>
</div> -->

<div class="position_click">
 <div class="click_menu">
 <div class="click_mypage"><a href="mypage">マイページ</a></div>
 <div class="click_profile"><a href="/profiles/{{ \Auth::id() }}">プロフィールを表示</a></div>
 <div class="click_logout"><a href="/logout">ログアウト</a></div>
</div>
</div>

  <!-- <p class="username"> {{$user->name}}さん</p> -->
  <!-- コメントアウトprofile_margin-->
  <!-- <div class="profile_margin"> -->
    <!-- <a class="spana_a" href="/profiles/{{ \Auth::id() }}">プロフィールを見る
    <img class="spana" src="{{ asset('images/spana.png')}}" alt="編集">
    </a> -->
  <!-- </div> -->
  <!-- コメントアウト終わり -->
<!-- </div>
</div> -->

    <div class="flex" id="flex">
     <div class="e" id="e">トピックスを探す</div>
     <div class="kn" id="kn"><input placeholder="検索"></div>
    </div>
<div class="bar" id="bar"> </div>
<p>トピックス {{ count($topics) }}件 </p> 
@foreach($topics as $topic)
<div class="topic_po" id="topic_po">
<div class="topic" id="topic">
<div class="title" id="title">
    タイトル：{{ $topic->title }}
</div>
  <div class="icon" id="icon">
    <img class="icon_image" id="icon_image" src="{{ Storage::disk('s3')->url('uploads/' . $topic->image) }}"alt="トピック画像">
  </div>
  <div class="time" id="time">
    {{ $topic->created_at}}
  </div>
  <div class="honbun" id="honbun">
    <div class="content" id="content">
    {{ $topic->content}}
    </div>  
  </div>
  <div class="name" id="name">
  {{ $topic->user->name }}さん
  </div>
  <div class="profile" id="profile">
    <img class="profile_image" id="profile_image" src="{{ Storage::disk('s3')->url('uploads/' . $topic->user->profile->image) }}" alt="プロフィール">
  </div>
</div>
</div>
@endforeach
<script src="{{ asset('/js/menu.js')}}"></script>
  </body>
</html>