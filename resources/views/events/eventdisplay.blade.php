<!-- <!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>イベント一覧</title>
  <link rel="stylesheet" href="{{asset('/css/eventdisplay.css')}}">
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
    <div class="e">イベントを探す</div>
    <div class="kn"><input placeholder="検索"></div>
  </div>
  <div class="gr">
    <div class="yellow">イベント一覧</div>
    <div><a href="/favorites/{{ \Auth::id() }}">いいねしたイベント</a></div>
    <div><a href="/events/{{ \Auth::id() }}">主催イベント</a></div>
  </div>
  <div class="bar"> </div>
  イベント{{ count($events) }}件
  <table class="table table-bordered table-striped">
    <tr><th style="width: 50px">イベントID</th><th style="width: 50px">コミュニティ名</th><th style="width: 50px">ユーザー名</th><th style="width: 50px">タイトル</th><th style="width: 50px">内容</th><th style="width: 50px">作成日</th></tr>
    @foreach($events as $event)
    <tr><th>{{$event->id}}</th><th>{{$event->community->name}}</th><th>{{$event->user->name}}</th><th>{{$event->title}}</th><th>{{$event->content}}</th><th>{{$event->created_at}}</th></tr>
    @endforeach
  </table>
</body>
</html> -->









<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <title>イベント一覧</title>
  <!-- <link rel="stylesheet" href="{{ asset('/css/topic_display.css')}}"  type="text/css" /> -->
  <link rel="stylesheet" href="{{ asset('/css/topic_display.css')}}?v={{ filemtime(('css/topic_display.css')) }}" type="text/css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
 </head> 
 <body>

 <div class="header">
    <p>イベント一覧</p>
  </div>

   <!-- <div class="po" id="po">
     <nav>
       <ul class="nav" id="nav">
         <li> <a href="/mypage">マイページ</a> <img class="top" id="top" src="{{ asset('images/komyu.jpeg')}}" alt="マイページ"></li>
       </ul>
     </nav>
     <ul class="logout" id="logout">
       <li> <a href="/logout">ログアウト</a> </li>
       <img id="logphoto" src="{{ asset('uploads/' . $user->profile->image) }}" alt="ログアウト">
     </ul>
   </div> -->

   <div class="logout">
      <ul>
         <li>
          <!-- <a href="/logout">ログアウト</a> -->
          <img id="logphoto" src="{{ Storage::disk('s3')->url('uploads/' . $user->profile->image) }}" alt="ログアウト">
      </ul>
    </div>
<div class="position_click">
 <div class="click_menu">
 <div class="click_mypage"><a href="mypage">マイページ</a></div>
 <div class="click_profile"><a href="/profiles/{{ \Auth::id() }}">プロフィールを表示</a></div>
 <div class="click_logout"><a href="/logout">ログアウト</a></div>
</div>
</div>

<div class="search_po">
  <form action="{{ route('communities.index') }}" method="GET" name="search_event">
   <div class="search-wrapper col-sm-4">
       <div class="user-search-form">
         {{ Form::text('search_event', null, ['id' => 'search_name', 'class' => 'form-control shadow custom-margin', 'placeholder' => 'イベントを検索する']) }}
         {{ Form::button('<i class="fa fa-search" aria-hidden="true"></i>', ['class' => 'btn search-icon', 'type' => 'button']) }}
       </div>
   </div>
  </form>
</div>





  <!-- コメントアウトprofile_margin-->
  <!-- <div class="profile_margin"> -->
    <!-- <a class="spana_a" href="/profiles/{{ \Auth::id() }}">プロフィールを見る
    <img class="spana" src="{{ asset('images/spana.png')}}" alt="編集">
    </a> -->
  <!-- </div> -->
  <!-- コメントアウト終わり -->
<!-- </div>
</div> -->

    <!-- <div class="flex" id="flex"> -->
     <div class="e" id="event_sagasu">イベントを探す</div>
     <!-- <div class="user-search-form"> -->
     <!-- <form action="" id="search-name" method="GET"  name="search_name">
     <div class="kn" id="kn"><input placeholder="検索"></div>
     <button id="search-button">検索</button> -->



  <!-- <div class="search_po">
  <form action="{{ route('open_topics.get') }}" method="GET" name="search_form">
   <div class="search-wrapper col-sm-4">
       <div class="user-search-form">
         {{ Form::text('search_name', null, ['id' => 'search_name', 'class' => 'form-control shadow custom-margin', 'placeholder' => 'トピックを検索する']) }}
         {{ Form::button('<i class="fa fa-search" aria-hidden="true"></i>', ['class' => 'btn search-icon', 'type' => 'button']) }}
       </div>
     </div>
   </div>
</form> -->




     <div class="search-results"></div>
     <div class="user-index-wrapper"></div>
     <!-- </form> -->
     <!-- </div> -->
    <!-- </div> -->

    <!-- <div id="search-results"></div> -->

<!-- <div class="bar" id="bar"> </div> -->
<p class="count_topic">イベント {{ count($events) }}件</p>

<p class="mypage"><img src="{{ asset('images/home.png')}}" alt="マイページ"><a href="mypage" class="mypage_link">マイページ</a></p>
<p class="tweet"><img src="{{ asset('images/tweet.png')}}" alt="トピック"><a href="getOpenTopics" class="topic_link">トピック</a></p>
<p class="community_black"><img src="{{ asset('images/community_black.png')}}" alt="コミュニティ"><a href="/communities" class="communities_link">コミュニティ</a></p>
<p class="event_"><img src="{{ asset('images/event.png')}}" alt="イベント"><a href="/getOpenEvents" class="event_link">イベント</a></p>



@foreach($events as $event)
<div class="topic_po" id="topic_po">
<div class="topic" id="topic">
<div class="bktitle" id="bktitle">
<div class="title" id="title">
   {{ $event->title }}
</div>
</div>
  <div class="icon" id="icon">
    @if($event->image)
   <!-- <img class="icon_image" id="icon_image" style="background-image:  url('{{ asset('uploads/' . $event->image) }}';"> -->
   <!-- <img class="icon_image" id="icon_image" src="{{ asset('uploads/' . $event->image) }}" alt="イベント画像"> -->

   <img class="icon_image" id="<?php echo $event->image ? "icon_image" : "icon_no_image"; ?>" src="{{ Storage::disk('s3')->url('uploads/' . $event->image) }}" alt="イベント画像">
    @endif
  </div>
  <div class="time" id="<?php echo $event->image ? 'time' : 'no_image_time'; ?>">
    {{ $event->created_at}}
  </div>
  <div class="honbun" id="honbun">
    <div class="content" id="content">
    {{ $event->content}}
    </div>  
  </div>
  <div class="name" id="name">
  {{ $event->user->name }}さん
  </div>
  <div class="profile" id="profile">
    <img class="profile_image" id="profile_image" src="{{ Storage::disk('s3')->url('uploads/' . $event->user->profile->image) }}" alt="プロフィール">
  </div>
</div>
</div>
@endforeach

<style>
.event_ a{
    color:black;
  }
</style>



<script src="{{ asset('/js/menu.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
// $('.user-search-form .search-icon').on('click', function () {
//     performSearch();
// });

// $('#search_name').on('keypress', function (e) {
//     if (e.which === 13) {
//         // performSearch_result();
//         return false;
//     }
// });


var debounceTimer;
var previousKeyword = '';

$('#search_name').on('keyup', function() {
  clearTimeout(debounceTimer);
  var keyword = $('#search_name').val();

  if (keyword !== previousKeyword) {
    debounceTimer = setTimeout(function() {
      previousKeyword = keyword;
      //検索処理実行
      performSearch();
    }, 500); // 500ミリ秒の遅延を設定
  }
});

function performSearch() {
  $('.search-results').empty();
  $('.search-null').remove();

  var keyword = $('#search_name').val();

  if (!keyword) {
    return false;
  }

    $.ajax({
        type: 'GET',
        url: `/getEventsBySearch/${encodeURIComponent(keyword)}`,
        dataType: 'json',

        beforeSend: function () {
            $('.loading').removeClass('display-none');
        }
    }).done(function (data) {
        $('.loading').addClass('display-none');
        let html = '';
        //data配列内の各要素に対して実行
        //valueは変数
        $.each(data, function (index, value) {
            let eventImage = value.image;
            let eventId = value.id;
            let eventTitle = value.title;
            let eventContent = value.content;
            let communityId = value.community_id
            html += `
        <div class="table_position">
        <table class="topic-table">
        <div class="border_s"></div>
        <tr class="topic-list">
            <td class="col-xs-2"><div class="topic_imagesearch"><img src="{{ Storage::disk('s3')->url('uploads') }}/${eventImage}" style="width:50px;"></div></td>
            <td class="col-xs-4"><div class="topic_titlesearch">${eventTitle}</div></td>
            <td class="col-xs-6"><div class="topic_contentsearch">${eventContent}</div></td>
            <td class="col-xs-8"><div class="button_search"><a class="btn btn-info" href="/communities/${communityId}/events/${eventId}">詳細</a></div></td>
        </tr>
        </table>
        </div>
    `;  
            console.log(data)  });

        $('.search-results').append(html);

        if (data.length === 0) {
            $('.user-index-wrapper').after('<p class="text-center mt-5 search-null">イベントが見つかりません</p>'); // 変更: ユーザー -> トピック
        }
    }).fail(function () {
        console.log('失敗しました。');
    });
}
</script>
  </body>
</html>




