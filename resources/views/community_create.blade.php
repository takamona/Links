<!DOCTYPE html>
<html lang="ja">
 <head>
  <meta charset="UTF-8">
  <title>マイページ</title>
  <link rel="stylesheet" href="./css/community_create.css" type="text/css" />
  </head>
<body>
   <div class="po">
    <nav>
      <ul class="nav">
        <li> <a href="mypage.html">マイページ</a> <img class="top" src="images/komyu.jpeg" alt="マイページ"> </li>
      </ul>
    </nav>
    <ul class="logout">
      <li> <a href="index.html">ログアウト</a> </li>
    </ul>
  </div>
  <div class="community">コミュニティ作成</div>
  
  <div class="content">コミュニティ内容</div>
  <div class="flex">
  <div class="name">コミュニティ名</div>
  <div class="name_empty"><textarea class="nametext" placeholder="コミュニティ名を記入して下さい"></textarea></div>
  </div>
  <div class="flex">
  <div class="Genre">ジャンル</div>
  <div class="Genreselect">
    <label for="prefecture">ゲームジャンル</label>
          <select name="geme" id="geme">
            <option value="">選択してください</option>
            <option value="アクション">アクションゲーム</option>
            <option value="格闘ゲーム">格闘ゲーム</option>
            <option value="音楽ゲーム">音楽ゲーム</option>
            <option value="LDゲーム">LDゲーム</option>
            <option value="シューティングゲーム">シューティングゲーム</option>
            <option value="ガンシューティングゲーム">ガンシューティングゲーム</option>
            <option value="フライトシューティングゲーム">フライトシューティング</option>
            <option value="FPS">FPS</option>
            <option value="TPS">TPS</option>
            <option value="バトルロイヤルゲーム">バトルロイヤルゲーム</option>
            <option value="ロールプレイングゲーム（RPG）">ロールプレイングゲーム（RPG）</option>
            <option value="コンピュータRPG">コンピュータRPG</option>
            <option value="MMORPG">MMORPG</option>
            <option value="アクションRPG">アクションRPG</option>
            <option value="シミュレーションRPG">シミュレーションRPG</option>
            <option value="ローグライクゲーム">ローグライクゲーム</option>
            <option value="ハクスラ">ハクスラ</option>
            <option value="3DダンジョンRPG">3DダンジョンRPG</option>
            <option value="JRPG">JRPG</option>
            <option value="シミレーションゲーム">シミレーションゲーム</option>
            <option value="フライトシム">フライトシム</option>
            <option value="ドライビングシミュレーター">ドライビングシミュレーター</option>
            <option value="スペースコンバットシム">スペースコンバットシム</option>
            <option value="トラックゲーム">トラックゲーム</option>
            <option value="レースシム">レースシム</option>
            <option value="ライフゲーム">ライフゲーム</option>
            <option value="育成シミュレーションゲーム">育成シミュレーションゲーム</option>
            <option value="ストラテジー">ストラテジー</option>
            <option value="リアルタイムストラテジー">リアルタイムストラテジー</option>
            <option value="タクティクス">タクティクス</option>
            <option value="タワーディフェンス">タワーディフェンス</option>
            <option value="MOBA">MOBA</option>
            <option value="アドベンチャーゲーム">アドベンチャーゲーム</option>
            <option value="ノベルゲーム">ノベルゲーム</option>
            <option value="ホラーゲーム">ホラーゲーム</option>
            <option value="脱出ゲーム">脱出ゲーム</option>
            <option value="美少女ゲーム">美少女ゲーム</option>
            <option value="ギャルゲー">ギャルゲー</option>
            <option value="BLゲーム">BLゲーム</option>
            <option value="乙女ゲーム">乙女ゲーム</option>
            <option value="アダルトゲーム">アダルトゲーム（エロゲ）</option>
            <option value="脱衣麻雀">脱衣麻雀</option>
            <option value="パズルゲーム">パズルゲーム</option>
            <option value="アクションパズル">アクションパズル</option>
            <option value="落ち物パズルゲーム">落ち物パズルゲーム</option>
            <option value="カードゲーム">カードゲーム</option>
            <option value="QTE">QTE</option>
            <option value="サンドボックス">サンドボックス</option>
            <option value="ボードゲーム">ボードゲーム</option>
            <option value="ioゲーム">ioゲーム</option>
            <option value="ボードゲーム">ボードゲーム</option>
            <option value="メイズ">メイズ</option>
            <option value="ナラティブ">ナラティブ</option>
          </select>
  </div>
  </div>
  <div class="flex">
  <div class="conditions">参加条件</div>
  <div class="condition_radio">
    <input type="radio" name="approve" value="誰でも参加可能">誰でも参加可能
          <input type="radio" name="approve" value="管理人の承認が必要">管理人の承認が必要
  </div>
  </div>
  <div class="flex">
  <div class="Authority">トピック作成権限</div>
  <div class="Authority_radio">
     <input type="radio" name="create" value="参加者が作成できる">参加者が作成できる
          <input type="radio" name="create" value="管理人が作成できる">管理人が作成できる
  </div>
  </div>
  <div class="flex">
  <div class="explain">コミュニティの説明</div>
  <div class="explain_empty"><textarea class="extext" placeholder="コミュニティの説明を記入して下さい"></textarea></div>
  </div>
  <div class="Confirmation">
    <a href="community_create_confirmation.html">入力内容確認</a>
  </div>
</body>