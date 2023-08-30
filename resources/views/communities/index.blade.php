<!-- <!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>コミュニティ一覧</title>
  <link rel="stylesheet" href="{{ asset('/css/community_display.css')}}" type="text/css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
  <div class="h"> 
    <span></span>
    <span></span>
    <span></span>
 </div>
  <div class="h2">
    <nav id="spmenu">
      <ul class="menu">
        <li>
          <a href="/mypage">
            <img src="{{ asset('images/MYPAGE.png')}}" alt="マイページ">
          </a>
        </li>
        <li>
          <a href="/communities/{{ \Auth::id() }}">
            <img src="{{ asset('images/COMMUNITY.png')}}" alt="コミュニティ">
          </a>
        </li>
        <li>
          <a href="/getOpenTopics_Events">
            <img src="{{ asset('images/TIMELINE.png')}}" alt="タイムライン">
          </a>
        </li>
        <li>
          <a href="/logout">
            <img src="{{ asset('images/LOGOUT.png')}}" alt="ログアウト">
          </a>
        </li>
      </ul>
    </nav>
  </div>
  <div class="nav">
    <div class="waku">
     <ul class="mypage">
      <li> <a href="/mypage">マイページ</a> <img class="top" src="{{ asset('images/komyu.jpeg')}}"> </li>
     </ul>
      <div class="logout">
        <ul>
          <li><a href="/logout">ログアウト</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="flex">
    <div class="c">コミュニティを探す！</div>
    <form  method="get">
     <div class="kn"><input type="search" placeholder="検索" name="seach_community">
                      
     </div>
    </form>
  </div>
  <div class="comyunity"> コミュニティ一覧 </div>
   <div class="create"><a href="/communities/create ">+新規コミュニティ作成</a></div>
  <table class="table table-bordered table-striped">
    <tr>
      <th>コミュニティID</th>
      <th>コミュニティ名</th>
      <th>作成者</th>
      <th>作成日</th>
    </tr>  
    @foreach($communities as $community)
    <tr>
      <th>{!! link_to_route('communities.show', $community->id , ['id' => $community->id ],[]) !!}</th>
      <th>{!! link_to_route('communities.show', $community->name , ['id' => $community->id ],[]) !!}</th>
      <th>{{ $community->user->name}}</th>
      <th>{{ $community->created_at}}</th>
    </tr>
    @endforeach
  </table>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="{{ asset('/js/mypage.js')}}"></script>
</body>
 -->


 
 <!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache">
  <title>コミュニティ一覧</title>
  <!-- <link rel="stylesheet" href="{{ asset('/css/topic_display.css')}}"  type="text/css" /> -->
  <link rel="stylesheet" href="{{ asset('/css/topic_display_community.css')}}?v={{ filemtime(('css/topic_display_community.css')) }}" type="text/css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
 </head> 
 <body>

 <div class="header">
    <p>コミュニティ一覧</p>
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
  <form action="{{ route('communities.index') }}" method="GET" name="search_community">
   <div class="search-wrapper col-sm-4">
       <div class="user-search-form">
         {{ Form::text('search_community', null, ['id' => 'search_name', 'class' => 'form-control shadow custom-margin', 'placeholder' => 'コミュニティを検索する']) }}
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
     <div class="e" id="event_sagasu">コミュニティを探す</div>
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

<a href="/communities/create "><div class="create">+新規コミュニティ作成</div></a>




     <div class="search-results"></div>
     <div class="user-index-wrapper"></div>
     <!-- </form> -->
     <!-- </div> -->
    <!-- </div> -->

    <!-- <div id="search-results"></div> -->

<!-- <div class="bar" id="bar"> </div> -->
<p class="count_topic">コミュニティ {{ count($communities) }}件</p>

<a href="mypage" class="mypage_link"><p class="mypage"><img src="{{ asset('images/home.png')}}" alt="マイページ"><span>マイページ</span></p></a>
  <a href="getOpenTopics" class="topic_link"><p class="tweet"><img src="{{ asset('images/tweet.png')}}" alt="トピック"><span>トピック</span></p></a>
  <a href="/communities" class="communities_link"><p class="community_black"><img src="{{ asset('images/community_black.png')}}" alt="コミュニティ"><span>コミュニティ</span></p></a>
  <a href="/getOpenEvents" class="event_link"><p class="event_"><img src="{{ asset('images/event.png')}}" alt="イベント"><span>イベント</span></p></a>




@foreach($communities as $community)
<div class="topic_po" id="topic_po">
<div class="topic" id="topic">

<div class="bktitle" id="bktitle">
<div class="title" id="title">
    タイトル：{!! link_to_route('communities.show', $community->name , ['id' => $community->id ],[]) !!}
</div>
</div>
  <div class="icon" id="icon">
  @if($community->image)
    <img class="icon_image" id="icon_image" src="{{ Storage::disk('s3')->url('uploads/' . $community->image) }}" alt="コミュニティ画像">
  @endif
  </div>
  <div class="time" id="time">
    {{ $community->created_at}}
  </div>
  <div class="honbun" id="honbun">
    <div class="content" id="content">
    {{ $community->content}}
    </div>  
  </div>
  <div class="name" id="name">
  <!-- {{ $community->user->name }}さん -->

  
  </div>
  <div class="profile" id="profile">
    <!-- <img class="profile_image" id="profile_image" src="{{ asset('uploads/' . $community->user->profile->image) }}" alt="プロフィール"> -->
  </div>
</div>
</div>
@endforeach

<style>
.community_black{
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
        url: `/getCommunitiesBySearch/${encodeURIComponent(keyword)}`,
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
            let communityImage = value.image;
            let communityId = value.id;
            let communityname = value.name;
            let communityContent = value.content;
            // let communityId = value.community_id
            html += `
        <div class="table_position">
        <table class="topic-table">
        <div class="border_s"></div>
        <tr class="topic-list">
            <td class="col-xs-2"><div class="topic_imagesearch"><img src="{{ Storage::disk('s3')->url('uploads') }}/${communityImage}" style="width:50px;"></div></td>
            <td class="col-xs-4"><div class="topic_titlesearch">${communityname}</div></td>
            <td class="col-xs-6"><div class="topic_contentsearch">${communityContent}</div></td>
            <td class="col-xs-8"><div class="button_search"><a class="btn btn-info" href="/communities/${communityId}">詳細</a></div></td>
        </tr>
        </table>
        </div>
    `;  
            console.log(data)  });

        $('.search-results').append(html);

        if (data.length === 0) {
            $('.user-index-wrapper').after('<p class="text-center mt-5 search-null">コミュニティが見つかりません</p>'); // 変更: ユーザー -> トピック
        }
    }).fail(function () {
        console.log('失敗しました。');
    });
}
</script>
  </body>
</html>