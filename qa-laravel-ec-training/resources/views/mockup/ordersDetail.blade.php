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
    <div class="mb-14">
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
      <div class="w-11/12 ml-12">
        <div class="flex flex-row font-robotoFlex">
          <div class=" w-4/12">
            <table class="w-full text-center">
              <tbody>
                <tr class="bg-white">
                  <th scope="row" class="py-2 w-36 font-medium  text-gray-900 bg-qa-darkGray2">
                    注文日
                  </th>
                  <td class="py-2 border border-qa-darkGray2 ">
                    2022年1月21日
                  </td>
                </tr>
                <tr class="bg-white">
                  <th scope="row" class="py-2 w-36 font-medium  text-gray-900  bg-qa-darkGray2">
                    注文番号
                  </th>
                  <td class="py-2 border border-qa-darkGray2 ">
                    000-000-0000
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="ml-10 w-4/12">
            <table class="w-full">
              <tbody>
                <tr class="bg-white">
                  <th scope="row" class="py-2 w-36 font-medium text-gray-900 bg-qa-darkGray2">
                    送付先
                  </th>
                  <td class="pl-4 py-1 border border-qa-darkGray2">
                    〒〇〇〇−〇〇〇〇
                    <br>富山県南砺市〇〇　〇ー〇ー〇
                    <br>××××様
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="flex flex-row mt-14">
          <div class="font-inter basis-9/12">
            <div class="relative overflow-x-auto">
              <table class="w-full text-sm text-center">
                <thead class=" text-black bg-qa-thinGray">
                  <tr>
                    <th class="py-7">
                      No
                    </th>
                    <th scope="col" class="pl-6 py-7">
                      商品名
                    </th>
                    <th scope="col" class="pl-6 py-7">
                      商品カテゴリ
                    </th>
                    <th scope="col" class="pl-6 py-7">
                      価格
                    </th>
                    <th scope="col" class="pl-6 py-7">
                      注文個数
                    </th>
                    <th scope="col" class="pl-6 py-7">
                      小計(税抜み)
                    </th>
                    <th scope="col" class="pl-6 py-7">
                      備考
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="bg-white text-black">
                    <th scope="row" class="px-4 py-5 font-medium font-robotoFlex text-gray-900 text-center bg-qa-thinGray">
                      1
                    </th>
                    <td class="pl-3 py-5 font-inter flex border-b border-qa-darkGray2">
                      <img src="/images/sandwich.png" class="object-contain w-24">
                      <div class="ml-4">
                        <div class="font-inter text-left text-base text-qa-blue font-bold">
                          <p>滑らか　ハサミ</p>
                          <p>ステンレス</p>
                        </div>
                      </div>
                    </td>
                    <td class="pl-5 font-inter text-lg border-b border-qa-darkGray2">
                      文房具
                    </td>
                    <td class="pl-5 font-inter text-xl border-b border-qa-darkGray2">
                      ¥300
                    </td>
                    <td class="pl-5 font-inter text-xl border-b border-qa-darkGray2">
                      2
                    </td>
                    <td class="pl-6 font-inter text-xl border-b border-qa-darkGray2">
                      ¥600
                    </td>
                    <td class="pl-6 border-b border-qa-darkGray2 text-base font-bold">
                      注文状態：準備中
                    </td>
                  </tr>
                  <tr class="bg-white text-black">
                    <th scope="row" class="px-4 py-5 font-medium font-robotoFlex text-gray-900 text-center bg-qa-thinGray">
                      2
                    </th>
                    <td class="pl-3 py-5 font-inter flex border-b border-qa-darkGray2">
                      <img src="/images/sandwich.png" class="object-contain w-24">
                      <div class="ml-4">
                        <div class="font-inter text-left text-base text-qa-blue font-bold">
                          <p>滑らか　ハサミ</p>
                          <p>ステンレス</p>
                        </div>
                      </div>
                    </td>
                    <td class="pl-5 font-inter text-lg border-b border-qa-darkGray2">
                      文房具
                    </td>
                    <td class="pl-5 font-inter text-xl border-b border-qa-darkGray2">
                      ¥300
                    </td>
                    <td class="pl-5 font-inter text-xl border-b border-qa-darkGray2">
                      2
                    </td>
                    <td class="pl-6 font-inter text-xl border-b border-qa-darkGray2">
                      ¥600
                    </td>
                    <td class="pl-6 border-b border-qa-darkGray2 text-base font-bold">
                      注文状態：準備中
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <div class="basis-3/12">
            <div class="ml-10 sticky top-40">
              <div class="bg-qa-darkGray2 py-4">
                <div class="mx-6 font-inter">
                  <p class="text-center text-lg font-bold">合計金額</p>
                  <div class="bg-white py-5 mt-5 text-xl">
                    <div class="mx-4 mt-4">
                      <div class="flex justify-between mx-4">
                        <p class="">商品</p>
                        <p class="">１点</p>
                      </div>
                      <div class="border-t border-t-qa-darkGray">　</div>
                    </div>
                    <div class="mx-4">
                      <div class="flex justify-between mx-4">
                        <p class="">注文数</p>
                        <p class="">４点</p>
                      </div>
                      <div class="border-t border-t-qa-darkGray">　</div>
                    </div>
                    <div class="mx-4">
                      <div class="flex justify-between mx-2">
                        <p class="mt-0.5">合計</p>
                        <p class="font-bold text-2xl text-qa-red ">¥1200<span class="text-black text-base font-normal">(税込)</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="mt-4 flex justify-center">
                    <button type="button" class="text-center text-white bg-qa-red2 py-4 w-8/12 rounded-md">注文をキャンセル</button>
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
