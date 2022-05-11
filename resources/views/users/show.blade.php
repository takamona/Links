<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
    <title>プロフィール登録</title>
    <link rel="stylesheet" href="{{asset ('css/other.css')}}">
  </head>
  <body>
    <div class="po">
      <nav>
        <ul class="nav">
          <li>
            <a href="/mypage">マイページ</a>
            <img class="top" src="{{asset ('images/komyu.jpeg')}}" alt="マイページ">
          </li>
        </ul>
      </nav>
      <ul class="logout">
        <li>
          <a href="/logout">ログアウト</a>
        </li>
      </ul>
    </div>
    <div class="plofile"><img class="profile_phpto" src="{{asset('/uploads/' . $user->profile->image)}}" alt="プロフィール"></div>
    <div class="friend">
      <ul>
        <li>フレンド一覧</li>
      </ul>
    </div>
    <div class="photogr">
      <div class="photoA">
        <img class="syoki" src="{{asset('images/smiley.png')}}" alt="フレンド">
      </div>
      <div class="photoA">
        <img class="syoki" src="{{asset ('images/smiley.png')}}" alt="フレンド">
      </div>
      <div class="photoA">
        <img class="syoki" src="{{asset ('images/smiley.png')}}" alt="フレンド">
      </div>
    </div>
    <div class="photogr2">
      <div class="photoB">
        <img class="syoki" src="{{asset ('images/smiley.png')}}" alt="フレンド">
      </div>
      <div class="photoB">
        <img class="syoki" src="{{asset ('images/smiley.png')}}" alt="フレンド">
      </div>
      <div class="photoB">
        <img class="syoki" src="{{asset ('images/smiley.png')}}" alt="フレンド">
      </div>
    </div>
    <table class="example">
      <tr>
      <th colspan="2">プロフィール
      </th>
      </tr>
      <tr>
      <th>名前
      </th>
      <th>{{$user->name}}
      </th>
      </tr>
      <tr>
      <th>性別
      </th>
      <th>{{$user->profile->gender}}
      </th>
      </tr>
      <tr>
      <th>住んでいる場所
      </th>
      <th>{{$user->profile->address}}
      <tr>
      <th>趣味
      </th>
      <th>{{$user->profile->hobby}}
      </th>
      </tr>
      <tr>
      <th>自己紹介
      </th>
      <th>{{$user->profile->introduction}}
      </th>
      </tr>
    </table>
    <div class="blue">
       
        <form action="/friends" method="POST">
       <input type="hidden" name="_token" value="{{ csrf_token() }}">  
       <input type="hidden" name="community_id" value="{{ $community->id }}">
       <input type="hidden" name="user_id" value="{{ $user->id }}">
       <input type="submit" class="sinser" value="フレンド申請" style="background-color:#ffd700;font-size:15px;width:150px;height:60px; margin-left:400px; margin-top:10px;">
        </form>
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="profile.js"></script>
  </body>
</html>