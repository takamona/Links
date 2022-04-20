<!DOCTYPE html>
<html lang="ja">
  <head>
     
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="shortcut icon" href="images/favicon.ico">
  <title>ゲームコミュニティ</title>
    </head>
    <body>
        <h1>ゲームコミュニティリンクス</h1>
        <nav>
            <ul class="nav">
                <li>
                    <a href="index.html">TOP</a>
                    <img class="top" src="../images/top.jpg">
                </li>
                <li>
                    {!! link_to_route('login', 'ログイン', []) !!}
                    <img class="logingazou" src="../images/login.jpg">
                </li>
            </ul>
        </nav>
        <div class="controler">
            <img class="conts" src="../images/game.jpg">
        </div>
        <div class="po">
            <p>ゲームが趣味の人と交流出来るコミュニティサイト！！</p>
        </div>
        <div class="po2">
            <p>友達探しにも最適！！</p>
        </div>
        <div class="explain">
            <ul>
                <li>ここはゲームコミュニティリンクスです。</li>
            </ul>
            <ul>
                <li>ゲームを趣味としている人が繋がることを目的として設立しました。</li>
            </ul>
            <ul>
                <li>日記投稿機能など細かい機能もあります。ご利用下さい。</li>
            </ul>
            <ul>
                <li>まずは新規登録・ログインページからログインして下さい。</li>
            </ul>
        </div>
        <div class="login">
            <ul>
                <li>1.新規アカウント作成</li>
            </ul>
            <img class="new" src="../images/login.jpg">
            <ul class="new2">
                <li>メールアドレスとパスワードを新規登録画面クリック後に入力して下さい。</li>
            </ul>
            <ul>
                <li>2.ログイン</li>
            </ul>
            <img class="login" src="../images/komyu.jpeg">
            <ul class="login2">
                <li>メールアドレスとパスワードを新規登録画面クリック後に入力して下さい。</li>
            </ul>
            <ul class="sarch">
                <li>3.コミュニティ登録</li>
            </ul>
            <img class="sarchgazou" src="../images/glasses.jpg">
            <ul class="sarch2">
                <li>コミュニティ一覧から検索して登録。</li>
            </ul>
        </div>
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS, then Font Awesome -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <script src="js/script.js"></script>
    </body>
</html>