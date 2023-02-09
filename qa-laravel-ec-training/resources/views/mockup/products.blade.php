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
    
    <title>商品検索</title>
  </head>
  
  <body>
    <div class="mb-72">
      <p class="text-sm mt-14 ml-5 font-inter">ホーム　>　「はさみ」の検索結果</p>
      <div class="flex mx-6 mt-10">
        <img src="/images/search.png" class="object-contain ml-7 mr-2 w-7 mt-1" />
        <div>
          <p class="text-2xl mt-1 font-inter">「はさみ」の検索結果</p>
        </div>
      </div>
      <div>
        <div class="border-t-2 mt-2 border-blue-300 w-11/12 ml-12">　</div>
      </div>
      <div class="bg-qa-gray h-14 w-11/12 ml-12 mt-20">
        <div class="mx-4">
          <div class="flex justify-between font-inter">
            <div class="flex mt-3 ml-10">
              <p class="text-xl mr-2">
                <span class="text-qa-red text-2xl">2500</span
                ><span class="text-sm text-black ml-1">件中</span>
              </p>
              <p class="mt-1.5">1〜20件表示</p>
            </div>
            <div class="flex">
              <div class="mt-0.5">
                <input type="checkbox" value="" class="w-5 h-5 bg-white border-2 border-black rounded mt-4">
              </div>
              <p class="mr-16 mt-4 ml-2">欠品を表示しない</p>
              <div class="flex">
                <p class="ml-16 mt-4">並べ替え：</p>
                <select class="mt-3 px-2 text-sm text-center font-robotoFlex text-gray-900 bg-gray-50 rounded-sm border border-gray-300">
                  <option>人気順</option>
                  <option>新着順</option>
                </select>
              </div>
              <div class="flex">
                <p class="ml-10 mt-4">表示件数：</p>
                <select class="mt-3 px-2 text-sm text-center font-robotoFlex text-gray-900 bg-gray-50 rounded-sm border border-gray-300">
                  <option>10件</option>
                  <option>20件</option>
                  <option>40件</option>
                </select>
              </div>
            </div>
          </div>
        </div>
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
      <div class="mr-3">
        <div class="shadow-md w-11/12 ml-12 mt-9">
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
      <div class="mr-3">
        <div class="shadow-md w-11/12 ml-12 mt-9">
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
      <div class="flex justify-center text-xs mt-32">
        <nav aria-label="Page navigation example">
          <ul class="inline-flex -space-x-px">
            <li>
              <a href="#" class="px-2 py-4 bg-white border border-qa-blue">1</a>
            </li>
            <li>
              <a href="#" class="px-2 py-4 bg-white border border-qa-blue">2</a>
            </li>
            <li>
              <a href="#" class="px-2 py-4 bg-white border border-qa-blue">3</a>
            </li>
            <li>
              <a href="#" class="px-2 py-4 bg-white border border-qa-blue">4</a>
            </li>
            <li>
              <a href="#" class="px-2 py-4 bg-white border border-qa-blue">5</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </body>
</html>
