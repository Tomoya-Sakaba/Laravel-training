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
    <div class="mb-80">
      <p class="text-sm mt-14 ml-5 font-inter">ホーム　＞　カート</p>
      <div class="flex mx-6 mt-20">
        <p class="text-2xl mt-3 ml-7 font-inter text-qa-blue font-bold">カート内に商品はありません</p>
      </div>
      <div>
        <div class="border-t-2 mt-2 border-blue-300 w-11/12 ml-12">　</div>
      </div>
      <div class="w-11/12 ml-12">
        <div class="flex flex-row mt-7">
          <div class="font-inter basis-8/12">
            <div class="relative overflow-x-auto">
              <div class="bg-qa-red/10  font-inter border border-qa-red">
                <div class="flex pt-3.5 pl-5">
                  <img src="/images/caution.png" class="object-contain w-12">
                  <p class="text-xl text-qa-red ml-2 mt-3">カート内に商品が存在しません。</p>
                </div>
                <div class="pl-5 pt-2.5">
                  <p class="">以下をお試しください</p>
                  <ul class="list-none pb-5">
                    <li>①商品を検索し、該当の商品を選択する </li>
                    <li>②商品数を選択し、カートに入れるボタンをクリックする </li>
                    <li>③カートを見るボタンをクリックする</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="basis-4/12">
            <div class="ml-16 w-5/6 sticky top-20">
              <div class="border-2 rounded-lg">
                <div class="mx-6 mt-6 mb-11 font-inter">
                  <div class="flex mt-3">
                    <p class="text-xs mt-3">商品数</p>
                    <p class="text-2xl font-bold ml-5">0</p>
                  </div>
                  <div class="border-t-2 border-black"></div>
                  <div class="flex justify-between mt-6">
                    <p class="text-xs mt-3">合計金額</p>
                    <p class="text-3xl font-semibold text-qa-red">¥　0</p>
                  </div>
                  <div class="border-2 mt-6 py-2 px-4">
                    <p class="">お届け先</p>
                    <p class="">〒〇〇〇−〇〇〇〇</p>
                    <p class="">〇〇県〇〇市〇〇　〇ー〇ー〇</p>
                  </div>
                  <div class="mt-4">
                    <button type="button" class="text-2xl text-center text-white font-bold bg-qa-darkGray py-5 w-full rounded-md">購入する</button>
                  </div>
                  <a href="#">
                    <div class="mt-4 bg-qa-green py-2 rounded-md">
                      <p class="text-2xl text-center text-white font-bold">買い物を続ける</p>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
