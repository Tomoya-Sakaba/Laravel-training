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
    
    <title>注文の詳細</title>
  </head>

  <body>
    <div class="mb-72">
      <p class="text-sm mt-14 ml-5 font-inter">ホーム　＞　注文履歴　＞　注文の詳細</p>
      <div class="flex justify-between ml-12 w-11/12 mt-20">
        <p class="text-2xl mt-6 font-inter text-qa-blue font-bold">注文の詳細</p>
        <a href="#">
          <div class="mr-1 bg-qa-green py-4 px-5 rounded-md">
            <p class="text-center text-white font-bold">注文履歴に戻る</p>
          </div>
        </a>
      </div>
      <div>
        <div class="border-t-2 mt-2 border-blue-300 w-11/12 ml-12">　</div>
      </div>
      <div class="mx-7">
        <div class="bg-qa-red/10 mt-7 w-11/12 ml-12 font-inter border border-qa-red">
          <div class="flex pt-3.5 pl-5">
            <img src="/images/caution.png" class="object-contain w-12">
            <p class="text-xl text-qa-red ml-3 mt-3">該当する注文はありませんでした。</p>
          </div>
          <div class="pl-5 pt-2.5">
            <p class="">以下をお試しください。</p>
            <ul class="list-disc ml-4 pb-5">
              <li>入力間違いがないか確認する。</li>
              <li>注文履歴に戻り、お探しの履歴を確認する。</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
