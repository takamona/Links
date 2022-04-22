<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
    <title>プロフィール登録</title>
    <link rel="stylesheet" href="./css/profile.css">
  </head>
  <body>
    <div class="po">
      <nav>
        <ul class="nav">
          <li>
            <a href="mypage.html">マイページ</a>
            <img class="top" src="images/komyu.jpeg" alt="マイページ">
          </li>
        </ul>
      </nav>
      <ul class="logout">
        <li>
          <a href="index.html">ログアウト</a>
        </li>
      </ul>
    </div>
    <ul class="peex">
      <li>プロフィールの登録を行いましょう。</li>
      <li>まずはプロフィール写真の登録を行います。</li>
    </ul>
    <div class="touroku">
      <div class="up1">クリックで写真を登録</div>
      <div id="preview">
        <img class="syoki" src="images/smiley.png" alt="プロフィール">
      </div>
      <div class="upload">
        <form>
          <input type="file" id="input-file">
        </form>
      </div>
    </div>
    <ul class="pclic">
      <li>次にプロフィールの登録を行います。</li>
      <li>各項目欄をクリックして入力して下さい。</li>
    </ul>
    <div class="title">
      <table class="example">
      <tr>
      <th colspan="2">プロフィール
      </th>
      </tr>
      <tr>
      <th>名前
      </th>
      <th>
      <input placeholder="名前" class="tc">
      </th>
      </tr>
      <tr>
      <th>性別
      </th>
      <th>
      <input type="radio" name="sex" value="男性">男性 
      <input type="radio" name="sex" value="女性">女性
      </th>
      <tr>
      <th>住んでいる場所
      </th>
      <th>
      <form method="post">
        <div>
          <label for="prefecture">都道府県</label>
          <select name="prefecture" id="prefecture">
            <option value="">選択してください</option>
            <option value="北海道">北海道</option>
            <option value="青森県">青森県</option>
            <option value="岩手県">岩手県</option>
            <option value="宮城県">宮城県 </option>
            <option value="秋田県">秋田県</option>
            <option value="山形県">山形県</option>
            <option value="福島県">福島県</option>
            <option value="茨城県">茨城県</option>
            <option value="栃木県">栃木県</option>
            <option value="群馬県">群馬県</option>
            <option value="埼玉県">埼玉県</option>
            <option value="千葉県">千葉県</option>
            <option value="東京都">東京都</option>
            <option value="神奈川県">神奈川県</option>
            <option value="新潟県">新潟県</option>
            <option value="富山県">富山県</option>
            <option value="石川県">石川県</option>
            <option value="福井県">福井県</option>
            <option value="山梨県">山梨県</option>
            <option value="長野県">長野県</option>
            <option value="岐阜県">岐阜県</option>
            <option value="静岡県">静岡県</option>
            <option value="愛知県">愛知県</option>
            <option value="三重県">三重県</option>
            <option value="滋賀県">滋賀県</option>
            <option value="京都府">京都府</option>
            <option value="大阪府">大阪府</option>
            <option value="兵庫">兵庫県</option>
            <option value="奈良県">奈良県</option>
            <option value="和歌山県">和歌山県</option>
            <option value="鳥取県">鳥取県</option>
            <option value="島根県">島根県</option>
            <option value="岡山県">岡山県</option>
            <option value="広島県">広島県</option>
            <option value="山口県">山口県</option>
            <option value="徳島県">徳島県</option>
            <option value="香川県">香川県</option>
            <option value="愛媛県">愛媛県</option>
            <option value="高知県">高知県</option>
            <option value="福岡県">福岡県</option>
            <option value="佐賀県">佐賀県</option>
            <option value="長崎県">長崎県</option>
            <option value="熊本県">熊本県</option>
            <option value="大分県">大分県</option>
            <option value="宮崎県">宮崎県</option>
            <option value="鹿児島県">鹿児島県</option>
            <option value="沖縄県">沖縄県</option>
          </select>
        </div>
      </form>
      <tr>
      <th>趣味
      </th>
      <th>
      <textarea placeholder="趣味" class="syumi"></textarea>
      </th>
      <tr>
      <th>自己紹介
      </th>
      <th>
      <textarea placeholder="自己紹介"></textarea>
      </th>
      </table>
    </div>
    <div class="kakunin">
      <ul class="nyuuryoku">
        <li><a href="mypage.html">入力内容確認を送信する</a></li>
      </ul>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="./js/profile.js"></script>
  </body>
</html>
