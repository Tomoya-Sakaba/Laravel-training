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
    <div class="mb-72">
      <p class="text-sm mt-14 ml-5 font-inter">ホーム　>　文房具・事務用品　>　「〇〇」の製品詳細</p>
      <div class="flex mx-6 mt-20">
        <p class="text-xl mt-3 ml-7 font-inter text-qa-blue font-bold">該当の商品はありません</p>
      </div>
      <div>
        <div class="border-t-2 mt-2 border-blue-300 w-11/12 ml-12">　</div>
      </div>
      <div class="bg-qa-red/10 mt-20 w-10/12 ml-24 font-inter border border-qa-red">
        <div class="flex pt-3.5 pl-5">
          <img src="/images/caution.png" class="object-contain w-12">
          <p class="text-xl text-qa-red ml-2 mt-3">該当の商品が存在しません</p>
        </div>
        <div class="pl-5 pt-2.5">
          <p class="">以下をお試しください</p>
          <ul class="list-disc ml-4 pb-5">
            <li>入力間違いがないか確認する。</li>
            <li>商品検索フォームから商品を検索する。</li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
