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
    <div class="mb-24">
      <p class="text-sm mt-14 ml-5 font-inter">ホーム　＞　注文履歴</p>
      <div class="flex mx-6 mt-20">
        <p class="text-2xl mt-3 ml-7 font-inter text-qa-blue font-bold">注文履歴</p>
      </div>
      <div>
        <div class="border-t-2 mt-2 border-blue-300 w-11/12 ml-12">　</div>
      </div>
      <div class="w-11/12 ml-16 mt-4">
        <div class="ml-20">
          <a href="#">
            <div class="bg-qa-darkGray py-4 w-80 rounded-md">
              <p class="text-center text-white text-base font-bold">直近3ヶ月分の注文を表示する</p>
            </div>
          </a>
        </div>
        <div class="flex justify-center mt-11">
          <div class="w-8/12 font-inter">
            <div class="relative overflow-x-auto">
              <table class="w-full text-sm text-left">
                  <tbody>
                    <tr class="bg-white border border-qa-darkGray">
                      <th scope="row" class="pl-4 pr-1.5 py-5 border-r border-qa-darkGray font-medium font-robotoFlex text-gray-900 whitespace bg-qa-thinGray">
                        1
                      </th>
                      <td>
                        <div class="">
                          <div class="flex justify-between mx-8">
                            <div>
                              <p class="mt-3.5">注文日</p>
                              <p class="mb-10 mt-1">2022年1月21日</p>
                            </div>
                            <div>
                              <p class="mt-3.5">合計金額</p>
                              <p class="mb-10 mt-1">¥600</p>
                            </div>
                            <div>
                              <p class="mt-3.5">送付先</p>
                              <p class="mt-1">〒〇〇〇−〇〇〇〇<br>富山県南砺市〇〇　〇ー〇ー〇<br>××××様</p>
                            </div>
                            <div class="mr-3">
                              <p class="mt-3.5">注文番号</p>
                              <p class="mb-10 mt-1">000-0000-000</p>
                            </div>
                          </div>
                        </div>
                        <div class="border-t mt-3 border-qa-darkGray mx-7">　</div>
                        <div class="flex justify-between mx-8">
                          <div class="flex">
                            <img src="/images/sandwich.png" class="object-contain w-24 mb-6">
                            <div class="ml-4">
                              <div class="font-inter text-base text-qa-blue font-bold">
                                <p>滑らか　ハサミ　ステンレス</p>
                              </div>
                              <div class="text-base text-black mt-2 font-bold">
                                <p>など全2点</p>
                              </div>
                            </div>
                          </div>
                          <div>
                            <a href="#">
                              <div class="bg-qa-blue py-4 px-10 rounded-md mt-3 mr-3">
                                <p class="text-center text-white text-base font-bold">注文の詳細を見る</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <div>　</div>
                      </th>
                    </tr>
                    <tr class="bg-white border border-qa-darkGray">
                      <th scope="row" class="pl-4 pr-1.5 py-5 border-r border-qa-darkGray font-medium font-robotoFlex text-gray-900 whitespace bg-qa-thinGray">
                        2
                      </th>
                      <td>
                        <div class="">
                          <div class="flex justify-between mx-8">
                            <div>
                              <p class="mt-3.5">注文日</p>
                              <p class="mb-10 mt-1">2022年1月21日</p>
                            </div>
                            <div>
                              <p class="mt-3.5">合計金額</p>
                              <p class="mb-10 mt-1">¥600</p>
                            </div>
                            <div>
                              <p class="mt-3.5">送付先</p>
                              <p class="mt-1">〒〇〇〇−〇〇〇〇<br>富山県南砺市〇〇　〇ー〇ー〇<br>××××様</p>
                            </div>
                            <div class="mr-3">
                              <p class="mt-3.5">注文番号</p>
                              <p class="mb-10 mt-1">000-0000-000</p>
                            </div>
                          </div>
                        </div>
                        <div class="border-t mt-3 border-qa-darkGray mx-7">　</div>
                        <div class="flex justify-between mx-8">
                          <div class="flex">
                            <img src="/images/sandwich.png" class="object-contain w-24 mb-6">
                            <div class="ml-4">
                              <div class="font-inter text-base text-qa-blue font-bold">
                                <p>滑らか　ハサミ　ステンレス</p>
                              </div>
                              <div class="text-base text-black mt-2 font-bold">
                                <p>など全3点</p>
                              </div>
                            </div>
                          </div>
                          <div>
                            <a href="#">
                              <div class="bg-qa-blue py-4 px-10 rounded-md mt-3 mr-3">
                                <p class="text-center text-white text-base font-bold">注文の詳細を見る</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <div>　</div>
                      </th>
                    </tr>
                    <tr class="bg-white border border-qa-darkGray">
                      <th scope="row" class="pl-4 pr-1.5 py-5 border-r border-qa-darkGray font-medium font-robotoFlex text-gray-900 whitespace bg-qa-thinGray">
                        3
                      </th>
                      <td>
                        <div class="">
                          <div class="flex justify-between mx-8">
                            <div>
                              <p class="mt-3.5">注文日</p>
                              <p class="mb-10 mt-1">2022年1月21日</p>
                            </div>
                            <div>
                              <p class="mt-3.5">合計金額</p>
                              <p class="mb-10 mt-1">¥600</p>
                            </div>
                            <div>
                              <p class="mt-3.5">送付先</p>
                              <p class="mt-1">〒〇〇〇−〇〇〇〇<br>富山県南砺市〇〇　〇ー〇ー〇<br>××××様</p>
                            </div>
                            <div class="mr-3">
                              <p class="mt-3.5">注文番号</p>
                              <p class="mb-10 mt-1">000-0000-000</p>
                            </div>
                          </div>
                        </div>
                        <div class="border-t mt-3 border-qa-darkGray mx-7">　</div>
                        <div class="flex justify-between mx-8">
                          <div class="flex">
                            <img src="/images/sandwich.png" class="object-contain w-24 mb-6">
                            <div class="ml-4">
                              <div class="font-inter text-base text-qa-blue font-bold">
                                <p>滑らか　ハサミ　ステンレス</p>
                              </div>
                              <div class="text-base text-black mt-2 font-bold">
                                <p>など全2点</p>
                              </div>
                            </div>
                          </div>
                          <div>
                            <a href="#">
                              <div class="bg-qa-blue py-4 px-10 rounded-md mt-3 mr-3">
                                <p class="text-center text-white text-base font-bold">注文の詳細を見る</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <div>　</div>
                      </th>
                    </tr>
                    <tr class="bg-white border border-qa-darkGray">
                      <th scope="row" class="pl-4 pr-1.5 py-5 border-r border-qa-darkGray font-medium font-robotoFlex text-gray-900 whitespace bg-qa-thinGray">
                        4
                      </th>
                      <td>
                        <div class="">
                          <div class="flex justify-between mx-8">
                            <div>
                              <p class="mt-3.5">注文日</p>
                              <p class="mb-10 mt-1">2022年1月21日</p>
                            </div>
                            <div>
                              <p class="mt-3.5">合計金額</p>
                              <p class="mb-10 mt-1">¥600</p>
                            </div>
                            <div>
                              <p class="mt-3.5">送付先</p>
                              <p class="mt-1">〒〇〇〇−〇〇〇〇<br>富山県南砺市〇〇　〇ー〇ー〇<br>××××様</p>
                            </div>
                            <div class="mr-3">
                              <p class="mt-3.5">注文番号</p>
                              <p class="mb-10 mt-1">000-0000-000</p>
                            </div>
                          </div>
                        </div>
                        <div class="border-t mt-3 border-qa-darkGray mx-7">　</div>
                        <div class="flex justify-between mx-8">
                          <div class="flex">
                            <img src="/images/sandwich.png" class="object-contain w-24 mb-6">
                            <div class="ml-4">
                              <div class="font-inter text-base text-qa-blue font-bold">
                                <p>滑らか　ハサミ　ステンレス</p>
                              </div>
                              <div class="text-base text-black mt-2 font-bold">
                                <p>など全6点</p>
                              </div>
                            </div>
                          </div>
                          <div>
                            <a href="#">
                              <div class="bg-qa-blue py-4 px-10 rounded-md mt-3 mr-3">
                                <p class="text-center text-white text-base font-bold">注文の詳細を見る</p>
                              </div>
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th>
                        <div>　</div>
                      </th>
                    </tr>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center text-xs mt-16">
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
            <li>
              <a href="#" class="px-2 py-4  bg-qa-darkGray2 border border-l-qa-blue border-t-qa-darkGray2 border-b-qa-darkGray2 border-r-qa-darkGray2">...</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </body>
</html>
