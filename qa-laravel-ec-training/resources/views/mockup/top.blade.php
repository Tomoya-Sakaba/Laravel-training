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
    
    <title>TOP</title>
  </head>
  
  <body>
    <div class="mb-96">
      <p class="text-sm mt-14 ml-5 font-inter">ホーム</p>
      <div class="mt-6">
        <div class="border-qa-blue border-4 flex w-10/12 ml-28 font-inter">
          <div class="flex">
            <div class="mt-1 ml-2 mb-1">
              <p class="text-qa-blue font-bold text-lg text-center">
                ◯◯◯◯◯◯◯◯◯<br />の<br />特徴
              </p>
            </div>
            <div class="border-dotted border-r-2 border-black">
              <div class="flex mt-3.5 mb-3 ml-8">
                <div class="flex flex-col">
                  <p class="text-sm">2000円以上のお買い上げで、</p>
                  <p class="text-qa-red font-bold text-2xl mt-1.5">
                    発送料無料！
                  </p>
                </div>
                <img
                  src="/images/track.png"
                  class="h-14 object-contain ml-2 mt-1 mr-3"
                />
              </div>
            </div>
            <div class="border-dotted border-r-2 border-black">
              <div class="flex mt-3.5 mb-3 ml-6">
                <div class="flex flex-col">
                  <p class="text-sm">正午までにご注文で、</p>
                  <p class="text-qa-red font-bold text-2xl mt-1.5">
                    最短翌日お届け！
                  </p>
                </div>
                <img
                  src="/images/calendar.png"
                  class="h-16 object-contain ml-4 mr-3"
                />
              </div>
            </div>
            <div class="border-dotted border-r-2 border-black">
              <div class="flex mt-3.5 mb-3 ml-3">
                <div class="flex flex-col">
                  <p class="text-sm">支払いが便利な</p>
                  <p class="text-qa-red font-bold text-2xl mt-1.5">
                    カード払いに対応！
                  </p>
                </div>
                <img
                  src="/images/creditCard.png"
                  class="h-14 object-contain ml-2 mr-3"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-10">
        <div class="border-qa-blue border-2 mx-20 font-inter">
          <p class="mt-6 ml-12 text-qa-red text-3xl font-bold font-robotoFlex">
            今月の人気商品
          </p>
          <div class="flex flex-row mt-10 mx-8 mb-12">
            <div class="basis-1/3 ml-14">
              <img
                src="/images/sandwich.png"
                class="shadow-sm object-contain w-60"
              />
            </div>
            <div class="basis-1/3 ml-3">
              <div class="w-72">
                <div class="flex text-qa-blue text-xl font-semibold">
                  <p class="">滑らか</p>
                  <p class="ml-6">ハサミ</p>
                  <p class="ml-6">ステンレス</p>
                </div>
                <div class="flex mt-4">
                  <p class="text-4xl font-semibold text-qa-red mr-10 ml-2">
                    ¥300〜
                  </p>
                  <p class="text-xl text-qa-red mt-3">(送料無料)</p>
                </div>
                <div class="flex flex-row">
                  <p class="mt-6 w-13">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  </p>
                </div>
              </div>
            </div>
            <div class="ml-14">
              <a href="#">
                <div class="bg-qa-blue rounded-md pb-3 pt-3">
                  <p class="text-lg mx-12 font-semibold text-white">
                    商品詳細ページ
                  </p>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
      <div class="flex mx-6 mt-20">
        <p class="text-3xl ml-7 font-inter">以前に購入した商品</p>
      </div>
      <div>
        <div class="border-t-2 mt-2 border-blue-300 w-11/12 ml-12">　</div>
      </div>
      <div class="mr-3">
        <div class="shadow-md w-11/12 ml-12 mt-16">
          <div class="grid grid-cols-4 place-content-evenly font-inter">
            <a href="#">
              <div class="ml-6 mb-9">
                <div class="flex justify-around">
                  <img src="/images/sandwich.png" class="shadow-sm" />
                </div>
                <div class="mt-3 flex justify-center text-qa-blue">
                  <p class="">滑らか</p>
                  <p class="ml-3">ハサミ</p>
                  <p class="ml-3">ステンレス</p>
                </div>
                <div class="flex justify-center">
                  <p class="mx-8 mt-3 text-sm w-13">
                    テキストが入ります。テキストが入ります。
                  </p>
                </div>
                <div class="flex justify-center mt-6 mb-5">
                  <p class="text-2xl font-semibold text-qa-red mr-11">¥300〜</p>
                  <p class="text-sm text-qa-red mt-2">(送料無料)</p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="ml-6">
                <div class="flex justify-around">
                  <img src="/images/sandwich.png" class="shadow-sm" />
                </div>
                <div class="mt-3 flex justify-center text-qa-blue">
                  <p class="">滑らか</p>
                  <p class="ml-3">ハサミ</p>
                  <p class="ml-3">ステンレス</p>
                </div>
                <div class="flex justify-center">
                  <p class="mx-8 mt-3 text-sm w-13">
                    テキストが入ります。テキストが入ります。
                  </p>
                </div>
                <div class="flex justify-center mt-6 mb-5">
                  <p class="text-2xl font-semibold text-qa-red mr-11">¥300〜</p>
                  <p class="text-sm text-qa-red mt-2">(送料無料)</p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="ml-6">
                <div class="flex justify-around">
                  <img src="/images/sandwich.png" class="shadow-sm" />
                </div>
                <div class="mt-3 flex justify-center text-qa-blue">
                  <p class="">滑らか</p>
                  <p class="ml-3">ハサミ</p>
                  <p class="ml-3">ステンレス</p>
                </div>
                <div class="flex justify-center">
                  <p class="mx-8 mt-3 text-sm w-13">
                    テキストが入ります。テキストが入ります。
                  </p>
                </div>
                <div class="flex justify-center mt-6 mb-5">
                  <p class="text-2xl font-semibold text-qa-red mr-11">¥300〜</p>
                  <p class="text-sm text-qa-red mt-2">(送料無料)</p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="ml-6">
                <div class="flex justify-around">
                  <img src="/images/sandwich.png" class="shadow-sm" />
                </div>
                <div class="mt-3 flex justify-center text-qa-blue">
                  <p class="">滑らか</p>
                  <p class="ml-3">ハサミ</p>
                  <p class="ml-3">ステンレス</p>
                </div>
                <div class="flex justify-center">
                  <p class="mx-8 mt-3 text-sm w-13">
                    テキストが入ります。テキストが入ります。
                  </p>
                </div>
                <div class="flex justify-center mt-6 mb-5">
                  <p class="text-2xl font-semibold text-qa-red mr-11">¥300〜</p>
                  <p class="text-sm text-qa-red mt-2">(送料無料)</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
      <div class="flex mx-6 mt-20">
        <p class="text-3xl mt-3 ml-7 font-inter">みんながよく買っているもの</p>
      </div>
      <div>
        <div class="border-t-2 mt-2 border-blue-300 w-11/12 ml-12">　</div>
      </div>
      <div class="mr-3">
        <div class="shadow-md w-11/12 ml-12 mt-16">
          <div class="grid grid-cols-4 place-content-evenly font-inter">
            <a href="#">
              <div class="ml-6 mb-9">
                <div class="flex justify-around">
                  <img src="/images/sandwich.png" class="shadow-sm" />
                </div>
                <div class="mt-3 flex justify-center text-qa-blue">
                  <p class="">滑らか</p>
                  <p class="ml-3">ハサミ</p>
                  <p class="ml-3">ステンレス</p>
                </div>
                <div class="flex justify-center">
                  <p class="mx-8 mt-3 text-sm w-13">
                    テキストが入ります。テキストが入ります。
                  </p>
                </div>
                <div class="flex justify-center mt-6 mb-5">
                  <p class="text-2xl font-semibold text-qa-red mr-11">¥300〜</p>
                  <p class="text-sm text-qa-red mt-2">(送料無料)</p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="ml-6">
                <div class="flex justify-around">
                  <img src="/images/sandwich.png" class="shadow-sm" />
                </div>
                <div class="mt-3 flex justify-center text-qa-blue">
                  <p class="">滑らか</p>
                  <p class="ml-3">ハサミ</p>
                  <p class="ml-3">ステンレス</p>
                </div>
                <div class="flex justify-center">
                  <p class="mx-8 mt-3 text-sm w-13">
                    テキストが入ります。テキストが入ります。
                  </p>
                </div>
                <div class="flex justify-center mt-6 mb-5">
                  <p class="text-2xl font-semibold text-qa-red mr-11">¥300〜</p>
                  <p class="text-sm text-qa-red mt-2">(送料無料)</p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="ml-6">
                <div class="flex justify-around">
                  <img src="/images/sandwich.png" class="shadow-sm" />
                </div>
                <div class="mt-3 flex justify-center text-qa-blue">
                  <p class="">滑らか</p>
                  <p class="ml-3">ハサミ</p>
                  <p class="ml-3">ステンレス</p>
                </div>
                <div class="flex justify-center">
                  <p class="mx-8 mt-3 text-sm w-13">
                    テキストが入ります。テキストが入ります。
                  </p>
                </div>
                <div class="flex justify-center mt-6 mb-5">
                  <p class="text-2xl font-semibold text-qa-red mr-11">¥300〜</p>
                  <p class="text-sm text-qa-red mt-2">(送料無料)</p>
                </div>
              </div>
            </a>
            <a href="#">
              <div class="ml-6">
                <div class="flex justify-around">
                  <img src="/images/sandwich.png" class="shadow-sm" />
                </div>
                <div class="mt-3 flex justify-center text-qa-blue">
                  <p class="">滑らか</p>
                  <p class="ml-3">ハサミ</p>
                  <p class="ml-3">ステンレス</p>
                </div>
                <div class="flex justify-center">
                  <p class="mx-8 mt-3 text-sm w-13">
                    テキストが入ります。テキストが入ります。
                  </p>
                </div>
                <div class="flex justify-center mt-6 mb-5">
                  <p class="text-2xl font-semibold text-qa-red mr-11">¥300〜</p>
                  <p class="text-sm text-qa-red mt-2">(送料無料)</p>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
