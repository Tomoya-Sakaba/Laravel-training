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
    
    <title>フッター</title>
  </head>
  <body>
    <div class="mx-16 bg-qa-gray">
      <div class="flex justify-center">
        <div class="mt-6">
          <p class="text-2xl text-center font-bold text-qa-blue">〇〇〇〇〇〇〇〇</p>
          <p class="font-robotoFlex font-semibold">
            © 2023 QuestAcademia, All rights reserved
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
