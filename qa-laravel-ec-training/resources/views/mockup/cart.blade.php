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
    <div class="mb-36">
      <p class="text-sm mt-14 ml-5 font-inter">ホーム　＞　カート</p>
      <div class="flex mx-6 mt-20">
        <p class="text-2xl mt-3 ml-7 font-inter text-qa-blue font-bold">カートに入っている商品</p>
      </div>
      <div>
        <div class="border-t-2 mt-2 border-blue-300 w-11/12 ml-12">　</div>
      </div>
      <div class="w-11/12 ml-12">
        <div class="flex flex-row mt-7">
          <div class="font-inter basis-8/12">
            <div class="relative overflow-x-auto">
              <table class="w-full text-sm text-left">
                <thead class=" text-black bg-qa-thinGray">
                  <tr>
                    <th class="pl-6 py-7">
                      No
                    </th>
                    <th scope="col" class="pl-6 py-7">
                      商品名/カテゴリ
                    </th>
                    <th scope="col" class="pl-6 py-7">
                      価格
                    </th>
                    <th scope="col" class="pl-6 py-7">
                    注文数
                    </th>
                    <th scope="col" class="pl-6 py-7">
                    小計(税抜)
                    </th>
                    <th scope="col" class="pl-6 py-7">
                      
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="bg-white">
                    <th scope="row" class="pl-6 py-5 font-medium font-robotoFlex text-gray-900 whitespace bg-qa-thinGray">
                      1
                    </th>
                    <td class="pl-3 py-5 font-inter flex border-b border-qa-darkGray2">
                      <img src="/images/sandwich.png" class="object-contain w-24">
                      <div class="ml-4">
                        <div class="font-inter text-base text-qa-blue font-bold">
                          <p>滑らか　ハサミ</p>
                          <p>ステンレス</p>
                        </div>
                        <div class="text-xs text-black mt-2.5">
                          <p>商品カテゴリ</p>
                          <p>文房具</p>
                        </div>
                      </div>
                    </td>
                    <td class="pl-5 font-inter text-black text-xl border-b border-qa-darkGray2">
                      ¥300
                    </td>
                    <td class="pl-5 font-robotoFlex border-b border-qa-darkGray2">
                      <select class="py-2 px-3 text-left font-robotoFlex text-gray-900 rounded-sm border border-gray-300">
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
                    </td>
                    <td class="pl-6 font-inter text-xl text-qa-red font-bold border-b border-qa-darkGray2">
                      ¥300
                    </td>
                    <td class="pl-6 border-b border-qa-darkGray2">
                      <a href="#">
                        <div class="flex">
                          <img src="/images/rubbish.png" class="object-contain w-4">
                          <p class="font-inter text-base font-bold mt-0.5 ml-3">削除</p>
                        </div>
                      </a>
                    </td>
                  </tr>
                  <tr class="bg-white">
                    <th scope="row" class="pl-6 py-5 font-medium font-robotoFlex text-gray-900 whitespace bg-qa-thinGray">
                      2
                    </th>
                    <td class="pl-3 py-5 font-inter flex border-b border-qa-darkGray2">
                      <img src="/images/sandwich.png" class="object-contain w-24">
                      <div class="ml-4">
                        <div class="font-inter text-base text-qa-blue font-bold">
                          <p>滑らか　ハサミ</p>
                          <p>ステンレス</p>
                        </div>
                        <div class="text-xs text-black mt-2.5">
                          <p>商品カテゴリ</p>
                          <p>文房具</p>
                        </div>
                      </div>
                    </td>
                    <td class="pl-5 font-inter text-black text-xl border-b border-qa-darkGray2">
                      ¥300
                    </td>
                    <td class="pl-5 font-robotoFlex border-b border-qa-darkGray2">
                      <select class="py-2 px-3 text-left font-robotoFlex text-gray-900 rounded-sm border border-gray-300">
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
                    </td>
                    <td class="pl-6 font-inter text-xl text-qa-red font-bold border-b border-qa-darkGray2">
                      ¥300
                    </td>
                    <td class="pl-6 border-b border-qa-darkGray2">
                      <a href="#">
                        <div class="flex">
                          <img src="/images/rubbish.png" class="object-contain w-4">
                          <p class="font-inter text-base font-bold mt-0.5 ml-3">削除</p>
                        </div>
                      </a>
                    </td>
                  </tr>
                  <tr class="bg-white">
                    <th scope="row" class="pl-6 py-5 font-medium font-robotoFlex text-gray-900 whitespace bg-qa-thinGray">
                      3
                    </th>
                    <td class="pl-3 py-5 font-inter flex border-b border-qa-darkGray2">
                      <img src="/images/sandwich.png" class="object-contain w-24">
                      <div class="ml-4">
                        <div class="font-inter text-base text-qa-blue font-bold">
                          <p>滑らか　ハサミ</p>
                          <p>ステンレス</p>
                        </div>
                        <div class="text-xs text-black mt-2.5">
                          <p>商品カテゴリ</p>
                          <p>文房具</p>
                        </div>
                      </div>
                    </td>
                    <td class="pl-5 font-inter text-black text-xl border-b border-qa-darkGray2">
                      ¥300
                    </td>
                    <td class="pl-5 font-robotoFlex border-b border-qa-darkGray2">
                      <select class="py-2 px-3 text-left font-robotoFlex text-gray-900 rounded-sm border border-gray-300">
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
                    </td>
                    <td class="pl-6 font-inter text-xl text-qa-red font-bold border-b border-qa-darkGray2">
                      ¥300
                    </td>
                    <td class="pl-6 border-b border-qa-darkGray2">
                      <a href="#">
                        <div class="flex">
                          <img src="/images/rubbish.png" class="object-contain w-4">
                          <p class="font-inter text-base font-bold mt-0.5 ml-3">削除</p>
                        </div>
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="flex flex-row-reverse">
                <div class="mt-9 w-10/12">
                  <div class="border rounded-md border-qa-darkGray">
                    <div class="mx-5 my-4 font-inter flex justify-between">
                      <div class="w-4/12">
                        <div class="flex">
                          <p class="text-xs mt-3">商品数</p>
                          <p class="text-2xl font-bold ml-5">3</p>
                        </div>
                        <div class="border-t-2 border-black mt-1"></div>
                        <div class="flex justify-between mt-2">
                          <p class="text-xs mt-3">合計金額</p>
                          <p class="text-3xl font-semibold text-qa-red">¥　900</p>
                        </div>
                      </div>
                      <div class="mt-4">
                        <button type="button" class="text-2xl text-center text-white font-bold bg-qa-darkGray py-3 px-7 rounded-md">再計算</button>
                      </div>
                      <div class="w-4/12 mt-1.5">
                        <p>注文数の変更を行った場合は、 左記の再計算ボタンを押して<br>ください。</p>
                      </div>
                    </div>
                  </div>
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
                    <p class="text-2xl font-bold ml-5">3</p>
                  </div>
                  <div class="border-t-2 border-black"></div>
                  <div class="flex justify-between mt-6">
                    <p class="text-xs mt-3">合計金額</p>
                    <p class="text-3xl font-semibold text-qa-red">¥　900</p>
                  </div>
                  <div class="border-2 mt-6 py-2 px-4">
                    <p class="">お届け先</p>
                    <p class="">〒〇〇〇−〇〇〇〇</p>
                    <p class="">〇〇県〇〇市〇〇　〇ー〇ー〇</p>
                  </div>
                  <div class="mt-4">
                    <button type="button" class="text-2xl text-center text-white font-bold bg-qa-red py-5 w-full rounded-md">購入する</button>
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
