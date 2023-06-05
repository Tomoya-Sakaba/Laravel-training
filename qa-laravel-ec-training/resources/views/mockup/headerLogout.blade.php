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
    
    <title>ヘッダー(ログイン前)</title>
  </head>
  <body>
    <div class="flex justify-between font-robotoFlex">
      <div class="mt-5 ml-5">
        <p class="text-2xl font-bold text-qa-blue">〇〇〇〇〇〇〇〇</p>
      </div>
      <div class="flex mt-3 text-white">
        <div class="flex bg-qa-red2 pb-2 mr-12 rounded-md">
          <img src="/images/pen.png" class="w-6 h-6 mt-2 ml-8 mr-4" />
          <a href="#" class="text-lg mt-2 mr-8 font-semibold">新規登録</a>
        </div>
        <div class="bg-qa-blue flex mr-6 rounded-md">
          <img src="/images/key.png" class="w-6 h-6 mt-2 ml-8 mr-3" />
          <a href="#" class="text-lg mt-2 mr-8 font-semibold">ログイン</a>
        </div>
      </div>
    </div>
    <div class="bg-qa-blue py-4 mt-3">
      <div class="flex">
        <div class="ml-4 basis-8/12">
          <form>
            <div class="flex mt-1.5">
              <select class="bg-qa-darkGray2 border border-qa-darkGray2 text-sm w-72 truncate py-4">
                <option>すべてのカテゴリー</option>
                <option>すべてのカテゴリーすべてのカテゴリー</option>
                <option>すべてのカテゴリーすべてのカテゴリーすべてのカテゴリーすべてのカテゴリー</option>
              </select>
              <div class="w-full">
                <div class="relative">
                  <input type="search" id="search" class="block w-full p-3 pl-7 text-gray-900 bg-white text-xl font-robotoFlex" placeholder="商品名を入力してください" required />
                  <button type="submit" class="text-white absolute right-2.5 bottom-2 bg-qa-blue font-medium font-robotoFlex text-sm px-4 py-2">
                    検索
                  </button>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="ml-24">
          <div class="outline outline-offset-4 outline-white rounded-sm">
            <div class="flex font-robotoFlex">
              <div class="flex flex-col bg-white rounded-md px-5">
                <p class="mt-0.5 text-xl">
                  1<span class="text-base ml-1 mr-3">商品</span>
                  <span class="ml-6 text-base">(合計<span class="text-xl">2</span>点)</span>
                </p>
                <p class="mt-0.5">
                  合計<span class="text-qa-red text-xl ml-7 font-bold">¥5000</span>(税込)
                </p>
              </div>
              <a href="#">
                <div class="flex flex-col ml-3">
                  <img src="/images/cart.png" class="object-contain ml-7 mr-9 w-9 mt-1" />
                  <p class="text-white">カートを見る</p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
