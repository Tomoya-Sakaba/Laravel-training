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
    
    <title>Document</title>
  </head>

  <body>
    <div class="mb-96">
      <p class="text-sm mt-14 ml-5 font-inter">ホーム　＞　注文履歴</p>
      <div class="flex mx-6 mt-20">
        <p class="text-2xl mt-3 ml-7 font-inter text-qa-blue font-bold">注文履歴</p>
      </div>
      <div>
        <div class="border-t-2 mt-2 border-blue-300 w-11/12 ml-12">　</div>
      </div>
      <div class="mx-7">
        <div class="bg-qa-red/10 mt-4 w-11/12 ml-12 font-inter border border-qa-red">
          <div class="flex pt-3.5 pl-5">
            <img src="/images/caution.png" class="object-contain w-12">
            <p class="text-xl text-qa-red ml-3 mt-3">注文履歴が存在しません。</p>
          </div>
          <div class="pl-5 pt-2.5">
            <p class="">以下をお試しください</p>
            <ul class="list-disc ml-4 pb-10">
              <li>複数のアカウントがある方は、異なったアカウントでログインしてみる。</li>
              <li>注文してから反映されるまで時間がかかることがあります。<br>少し時間置いてから再度お試しください。</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
