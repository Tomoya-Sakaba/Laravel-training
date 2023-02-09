<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSSのリンクはdist.cssのみ -->
    @vite(['resources/css/app.css'])
    @vite(['resources/css/dist.css'])
    <!-- 指定フォントですtailwind.config.jsに記載してます -->
    
    <title>会員情報</title>
  </head>

  <body>
    <div class="heading">
      <h1>会員情報</h1>
      <div class="info">
        <ul>
          <li>　お名前　　　　　　　　　××◯◯</li>
          <li>　郵便番号　　　　　　　　◯◯◯ ー　◯◯◯◯</li>
          <li>　都道府県　　　　　　　　富山県</li>
          <li>　市区町村　　　　　　　　南砺市</li>
          <li>　番地　　　　　　　　　　◯◯ー◯</li>
          <li>　建物名、部屋番号　　　　◯◯ビル　6階　602</li>
          <li>　会社名　　　　　　　　　株式会社◯◯商事</li>
          <li>　メールアドレス　　　　　marumarusyouzi@syouzi.ne.jp</li>
          <li>　電話番号　　　　　　　　000-0000-0000</li>
        </ul>
      <div class="btn-wrapper">
        <a class="btn-blue" href="#">修正／退会する</a>
    </div>
    </div>
  </body>
</html>
