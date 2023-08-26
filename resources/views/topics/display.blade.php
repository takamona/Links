<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Cache-Control" content="no-cache"> -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <title>トピック一覧</title>
  <!-- <link rel="stylesheet" href="{{ asset('/css/topic_display.css')}}"  type="text/css" /> -->
  <link rel="stylesheet" href="{{ asset('/css/topic_display.css')}}?v={{ filemtime(('css/topic_display.css')) }}" type="text/css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>

<body>

  <div class="header">
    <p>トピック一覧</p>
  </div>

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


  <div class="position_click">
    <div class="click_menu">
      <div class="click_mypage"><a href="mypage">マイページ</a></div>
      <div class="click_profile"><a href="/profiles/{{ \Auth::id() }}">プロフィールを表示</a></div>
      <div class="click_logout"><a href="/logout">ログアウト</a></div>
    </div>
  </div>

  <div class="search_po">
    <form action="{{ route('open_topics.get') }}" method="GET" name="search_form">
      <div class="search-wrapper col-sm-4">
        <div class="user-search-form">
          {{ Form::text('search_name', null, ['id' => 'search_name', 'class' => 'form-control shadow custom-margin', 'placeholder' => 'トピックを検索する']) }}
          {{ Form::button('<i class="fa fa-search" aria-hidden="true"></i>', ['class' => 'btn search-icon', 'type' => 'button']) }}
        </div>
      </div>
  </div>
  </form>

  <p class="topic_caution">※公開範囲を全体に設定したトピックのみ表示されています。</p>

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

  <!-- <div class="flex" id="flex"> -->
  <div class="e" id="event_sagasu">トピックスを探す</div>
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
  <p class="count_topic">トピックス {{ count($topics) }}件</p>

  <a href="mypage" class="mypage_link"><p class="mypage"><img src="{{ asset('images/home.png')}}" alt="マイページ"><span>マイページ</span></p></a>
  <a href="getOpenTopics" class="topic_link"><p class="tweet"><img src="{{ asset('images/tweet.png')}}" alt="トピック"><span>トピック</span></p></a>
  <a href="/communities" class="communities_link"><p class="community_black"><img src="{{ asset('images/community_black.png')}}" alt="コミュニティ"><span>コミュニティ</span></p></a>
  <a href="/getOpenEvents" class="event_link"><p class="event_"><img src="{{ asset('images/event.png')}}" alt="イベント"><span>イベント</span></p></a>


  @if ($keyword)
  <p>検索キーワード: {{ $keyword }}</p>
  @endif

  @foreach($topics as $topic)
  <div class="topic_re">
    <div class="topic_po" id="topic_po">
      <div class="topic" id="topic">

        <div class="bktitle">

          <div class="title" id="title">
            タイトル：{{ $topic->title }}
          </div>

        </div>

        <div class="icon" id="icon">
          @if($topic->image)
          <div class="icon_image" id="icon_image" style="background-image: url('{{ Storage::disk('s3')->url('uploads/' . $topic->image) }}');">
          </div>
          <!-- <img class="icon_image" id="icon_image" src="{{ asset('uploads/' . $topic->image) }}"  alt="トピック画像"> -->
          @endif
        </div>
        <div class="time" id="<?php echo $topic->image ? 'time' : 'no_image_time'; ?>">
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
  </div>
  @endforeach
  <style>
    .tweet {
      color: black;
    }

    .topic_caution {
      position: fixed;
      /* margin-left: 40%; */
      /* pc */
      width: 450px;
      margin-left: 40%;
      z-index: 9999;
      font-weight: bold;
    }
  </style>

  <!-- <script src="{{ asset('/js/menu.js')}}"></script> -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('/js/menu.js')}}"></script>
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
        url: `/getTopicsBySearch/${encodeURIComponent(keyword)}`,
        dataType: 'json',

        beforeSend: function() {
          $('.loading').removeClass('display-none');
        }
      }).done(function(data) {
        $('.loading').addClass('display-none');
        let html = '';
        //data配列内の各要素に対して実行
        //valueは変数
        $.each(data, function(index, value) {
          let topicImage = value.image;
          let topicId = value.id;
          let topicTitle = value.title;
          let topicContent = value.content;
          let communityId = value.community_id
          html += `
        <div class="table_position">
        <table class="topic-table">
        <div class="border_s"></div>
        <tr class="topic-list">
            <td class="col-xs-2"><div class="topic_imagesearch"><img src="{{ Storage::disk('s3')->url('uploads') }}/${topicImage}" style="width:50px;"></div></td>
            <td class="col-xs-4"><div class="topic_titlesearch">${topicTitle}</div></td>
            <td class="col-xs-6"><div class="topic_contentsearch">${topicContent}</div></td>
            <td class="col-xs-8"><div class="button_search"><a class="btn btn-info" href="/communities/${communityId}/topics/${topicId}">詳細</a></div></td>
        </tr>
        </table>
        </div>
    `;
          console.log(data)
        });

        $('.search-results').append(html);

        if (data.length === 0) {
          $('.user-index-wrapper').after('<p class="text-center mt-5 search-null">トピックが見つかりません</p>'); // 変更: ユーザー -> トピック
        }
      }).fail(function() {
        console.log('失敗しました。');
      });
    }
  </script>
</body>

</html>