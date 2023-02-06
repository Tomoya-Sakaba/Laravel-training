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
    <div class="mb-20">
      <p class="text-sm mt-14 ml-5 font-inter">ホーム　＞　文房具・事務用品　＞　「〇〇」の製品詳細</p>
      <div class="flex mx-6 mt-20">
        <p class="text-xl mt-3 ml-7 font-inter text-qa-blue font-bold">商品名が入ります</p>
      </div>
      <div>
        <div class="border-t-2 mt-2 border-blue-300 w-11/12 ml-12">　</div>
      </div>
      <div class="">
        <div class="mt-20  font-inter">
          <div class="">
            <div class="flex flex-row mt-10 ml-8 mb-12">
              <div class="basis-3/12 ml-14">
                <img
                  src="/images/sandwich.png"
                  class="shadow-sm object-contain w-80"
                />
              </div>
              <div class="basis-4/12 ml-14">
                <div class="">
                  <div class="">
                    <p class="text-lg">
                      商品の説明が入ります。商品の説明が入ります。商品の説明が入ります。商品の説明が入ります。商品の説明が入ります。商品の説明が入ります。商品の説明が入ります。
                    </p>
                  </div>
                  <div class="flex mt-5">
                    <p class="text-4xl font-semibold text-qa-red mr-16 ml-2">
                      ¥300〜
                    </p>
                    <p class="text-2xl text-qa-red mt-3">(送料無料)</p>
                  </div>
                  <div class="text-qa-darkGray font-robotoFlex mt-8">
                    <p class="">商品カテゴリ</p>
                    <p class="">文房具</p>
                  </div>
                </div>
              </div>
              <div class="ml-16">
                <div class="border-2 w-64">
                  <div class="m-6">
                    <div class="flex mt-3">
                      <p class="mt-2 font-robotoFlex">注文数</p>
                      <div class="ml-4">
                        <form>
                          <select class="py-2 px-5 w-full text-sm text-center font-robotoFlex text-gray-900 bg-gray-50 rounded-sm border border-gray-300">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                          </select>
                        </form>
                      </div>
                    </div>
                    <button type="button" class="bg-qa-yellow pb-2 mt-8 rounded-md inline-flex">
                      <img src="/images/cartBlack.png" class="w-7 object-contain mt-2 ml-4 mr-4" />
                      <p class="text-lg mt-2 mr-4">カートに入れる</p>
                    </button>
                    <button type="button" class="bg-qa-red pb-2 mt-4 rounded-md inline-flex">
                      <img src="/images/cart.png" class="w-7 object-contain mt-2 ml-4 mr-4" />
                      <p class="text-lg mt-2 mr-4 text-white">今すぐ購入する</p>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
