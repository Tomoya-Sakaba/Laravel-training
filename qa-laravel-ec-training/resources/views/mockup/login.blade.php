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
  
  <title>ログイン</title>
</head>

  <body>
    <div class="flex flex-col border border-qa-blue mx-28 mt-20">
      <div class="mt-10">
        <p class="text-4xl text-center text-qa-blue font-inter font-bold">ログイン</p>
      </div>
      <div class="flex justify-center mt-14">
        <div class="w-6/12">
          <div class="flex flex-wrap -mx-3">
            <div class="flex w-44 px-3">
              <p class="font-bold text-xl mt-2">メールアドレス</p>
            </div>
            <div class="flex w-8/12 px-3 ml-4">
              <input class="w-full text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2" type="text">
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mt-12">
            <div class="flex w-44 px-3">
              <p class="font-bold text-xl mt-2">パスワード</p>
            </div>
            <div class="flex w-8/12 px-3 ml-4">
              <input class="w-full text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2" type="password">
            </div>
          </div>
        </div>
      </div>
      <div class="flex justify-center mt-20 mb-12">
        <a href="#">
          <button class="text-xl text-white bg-qa-blue font-inter font-bold rounded-md px-20 py-4" type="button">ログイン</button>
        </a>
      </div>
    </div>
    <div class="text-center mt-24 mb-20">
      <div class="w-full">
        <p class="font-bold font-robotoFlex">初めてご利用の方は下記から新規登録を行ってください</p>
        <div class="mt-5">
          <a href="#">
            <button class="text-white bg-qa-red2 font-robotoFlex font-bold rounded-md px-10 py-3" type="button">新規登録してアカウントを作成する</button>
          </a>
        </div>
      </div>
    </div>
  </body>
</html>

