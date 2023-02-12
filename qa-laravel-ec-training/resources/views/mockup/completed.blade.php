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
  
  <title>購入完了画面</title>
</head>

  <body>
    <div class="flex flex-col border border-qa-blue mx-20 my-20">
      <div class="my-7">
        <p class="text-xl text-center text-qa-blue font-inter font-bold underline">ご購入が完了しました</p>
      </div>

      <div class="mx-6 my-6">
        <p class="text-2xl text-center text-white bg-qa-blue font-inter font-bold py-5">ご購入ありがとうございました</p>
      </div>

      <div class="my-4">
        <p class="text-base text-center font-bold">注文番号：〇〇〇〇〇〇〇〇</p>
      </div>

      <div class="flex justify-center mt-7">
        <p class="text-sm text-left">これから発送の手続きに入ります。<br>ご注文の詳細については、注文履歴から確認できます。</p>
      </div>

      <div class="flex justify-center my-12">
        <a href="#">
          <button class="text-xl text-white bg-qa-blue font-inter font-bold rounded px-16 py-4" type="button">TOPに戻る</button>
        </a>
      </div>
    </div>
  </body>
</html>

