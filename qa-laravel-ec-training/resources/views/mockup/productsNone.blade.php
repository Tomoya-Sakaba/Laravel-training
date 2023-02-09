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
    
    <title>商品検索空</title>
  </head>

  <body>
    <div class="mb-96">
      <p class="text-sm mt-14 ml-5 font-inter">ホーム　>　「〇〇〇」の検索結果</p>
      <div class="flex mx-6 mt-10">
        <img src="/images/search.png" class="object-contain ml-7 mr-2 w-7 mt-1" />
        <div>
          <p class="text-2xl mt-1 font-inter">「〇〇〇」の検索結果</p>
        </div>
      </div>
      <div>
        <div class="border-t-2 mt-2 border-blue-300 w-11/12 ml-12">　</div>
      </div>
      <div class="bg-qa-red/10 mt-20 w-10/12 ml-24 font-inter border border-qa-red">
        <div class="flex pt-3.5 pl-5">
          <img src="/images/caution.png" class="object-contain w-12">
          <p class="text-xl text-qa-red mt-3">「〇〇〇」に対する検索結果はありませんでした。</p>
        </div>
        <div class="pl-5 pt-2.5">
          <p class="">以下をお試しください。</p>
          <ul class="list-disc ml-4 pb-5">
            <li>同じ意味の別のキーワードを試してみる。（例：カバン→バッグ）</li>
            <li>言葉の区切り方を変えてみる。（大きい冷蔵庫　→ 大きい　冷蔵庫）</li>
            <li>キーワードの数を減らしてみる。</li>
            <li>入力間違いがないか確認する。</li>
          </ul>
        </div>
      </div>
    </div>
  </body>
</html>
