<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>マイページ</title>
  <link rel="stylesheet" href="{{ asset('/css/community_index.css')}}" type="text/css" />
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
          <a href="/timeline">
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
      <div class="logout">
        <ul>
          <li><a href="index.html">ログアウト</a></li>
        </ul>
      </div>
    </div>
  </div>
  <div class="flex">
    <div class="c">コミュニティを探す！</div>
    <div class="kn"><input placeholder="検索"></div>
  </div>
  <div class="comyunity"> コミュニティ一覧 </div>
   <div class="create"><a href="/communities/create ">新規コミュニティ作成</a></div>
  <table class="deta">
    <tr>
      <th>コミュニティID</th>
      <th>コミュニティ名</th>
      <th>作成者</th>
      <th>作成日</th>
    </tr>  
    @foreach($communities as $community)
    <tr>
      <th>{{ $community->id}}</th>
      <th><a href="/communities/{{ \Auth::id() }}">{{ $community->name}}</a></th>
      <th>{{ $community->user->name}}</th>
      <th>{{ $community->created_at}}</th>
    </tr>
    @endforeach
  </table>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="{{ asset('/js/mypage.js')}}"></script>
</body>