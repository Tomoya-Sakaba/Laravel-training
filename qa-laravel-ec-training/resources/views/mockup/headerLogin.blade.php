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
    <div class="flex justify-between font-robotoFlex">
      <div class="mt-7 ml-5">
        <p class="text-2xl font-bold text-qa-blue">〇〇〇〇〇〇〇〇</p>
      </div>
      <div class="">
        <div class="flex mt-5">
          <div class="flex pb-1 rounded-md text-qa-blue font-semibold">
            <p class="text-2xl mt-1.5 ml-3 mr-7">xxxx</p>
            <p class="text-2xl mt-2 mr-8">さん</p>
          </div>
          <div class="flex pb-2 rounded-md">
            <img
              src="/images/document.png"
              class="w-6 h-6 mt-2.5 ml-3 mr-3"
            />
            <a href="#" class="text-lg mt-2 mr-8 font-semibold">注文履歴</a>
          </div>
          <div class="flex pb-2 mr-2 rounded-md">
            <img src="/images/user.png" class="w-6 h-6 mt-2 ml-3 mr-4" />
            <a href="#" class="text-lg mt-2 mr-8 font-semibold"
              >アカウント情報</a
            >
          </div>
          <div class="bg-qa-darkGray flex mr-6 rounded-md">
            <img src="/images/key.png" class="w-6 h-6 mt-2 ml-8 mr-3" />
            <a href="#" class="text-lg text-white mt-2 mr-8 font-semibold"
              >ログアウト</a
            >
          </div>
        </div>
      </div>
    </div>
    <div class="bg-qa-blue py-6 mt-4">
      <div class="flex">
        <div class="ml-4 basis-8/12">
          <form>
            <div class="flex mt-1">
              <select class="bg-qa-darkGray2 border border-qa-darkGray2 text-sm w-72 truncate py-5">
                <option>すべてのカテゴリー</option>
                <option>すべてのカテゴリーすべてのカテゴリー</option>
                <option>すべてのカテゴリーすべてのカテゴリーすべてのカテゴリーすべてのカテゴリー</option>
              </select>
              <div class="w-full">
                <div class="relative">
                  <input
                    type="search"
                    id="search"
                    class="block w-full p-4 pl-10 text-gray-900 bg-white text-xl font-robotoFlex"
                    placeholder="商品名を入力してください"
                    required
                  />
                  <button
                    type="submit"
                    class="text-white absolute right-2.5 bottom-2.5 bg-qa-blue focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium font-robotoFlex text-sm px-4 py-2 mb-1"
                  >
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
                <p class="mt-2">
                  合計<span class="text-qa-red text-xl ml-7 font-bold"
                    >¥5000</span
                  >(税込)
                </p>
              </div>
              <a href="#">
                <div class="flex flex-col ml-3">
                  <img
                    src="/images/cart.png"
                    class="object-contain ml-7 mr-9 w-10 mt-1"
                  />
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
