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
    
    <title>会員情報修正</title>
  </head>

  <body>
    <div class="flex mx-6 mt-8">
      <p class="text-2xl mt-3 ml-7 font-inter text-qa-blue font-bold">会員情報修正</p>
    </div>
    <div>
      <div class="border-t-2 mt-2 border-blue-300 w-11/12 ml-12">　</div>
    </div>
    <div class="flex justify-center">
      <div class="mt-14 w-7/12 font-inter">
        <div class="inline">
          <form>
            <div class="flex flex-wrap -mx-3">
              <div class="flex w-44 px-3">
                <p class="font-bold mt-2">お名前</p>
              </div>
              <div class="flex pl-3">
                <label class="text-black font-bold mt-2">
                  性
                </label>
                <input class="w-9/12 text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2" type="text" value="鈴木">
              </div>
              <div class="flex">
                <label class="text-black font-bold mt-2">
                  名
                </label>
                <input class="w-9/12 text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2" type="text" value="太朗">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mt-6">
              <div class="flex w-44 px-3">
                <p class="font-bold mt-2">郵便番号</p>
              </div>
              <div class="flex w-40 px-3 ml-4">
                <input class="w-full text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2 text-center" type="text" value="111">
              </div>
              <p class="mt-2.5 ml-2">ー</p>
              <div class="flex w-40 px-3">
                <input class="w-full text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2 text-center" type="text" value="1111">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mt-8">
              <div class="flex w-44 px-3">
                <p class="font-bold mt-2">都道府県</p>
              </div>
              <div class="flex w-5/12 px-3 ml-4">
                <input class="w-full text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2" type="text" value="富山県">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mt-8">
              <div class="flex w-44 px-3">
                <p class="font-bold mt-2">市区町村</p>
              </div>
              <div class="flex w-5/12 px-3 ml-4">
                <input class="w-full text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2" type="text" value="南砺市〇〇">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mt-8">
              <div class="flex w-44 px-3">
                <p class="font-bold mt-2">番地</p>
              </div>
              <div class="flex w-5/12 px-3 ml-4">
                <input class="w-full text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2" type="text" value="26-4">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mt-8">
              <div class="flex w-44 px-3">
                <p class="font-bold mt-2">建物名、部屋番号</p>
              </div>
              <div class="flex w-8/12 px-3 ml-4">
                <input class="w-full text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2" type="text" value="〇〇ビル　６階　602">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mt-8">
              <div class="flex w-44 px-3">
                <p class="font-bold mt-2">会社名</p>
              </div>
              <div class="flex w-8/12 px-3 ml-4">
                <input class="w-full text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2" type="text" value="株式会社〇〇商事">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mt-8">
              <div class="flex w-44 px-3">
                <p class="font-bold mt-2">メールアドレス</p>
              </div>
              <div class="flex w-8/12 px-3 ml-4">
                <input class="w-full text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2" type="text" value="marumarusyouzi@syouzi.ne.jp">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mt-6">
              <div class="flex w-44 px-3">
                <p class="font-bold mt-2">電話番号</p>
              </div>
              <div class="flex w-36 px-3 ml-4">
                <input class="w-full text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2 text-center" type="text" value="111">
              </div>
              <p class="mt-2.5 ml-2">ー</p>
              <div class="flex w-36 px-3">
                <input class="w-full text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2 text-center" type="text" value="111">
              </div>
              <p class="mt-2.5 ml-2">ー</p>
              <div class="flex w-36 px-3">
                <input class="w-full text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2 text-center" type="text" value="111">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mt-8">
              <div class="flex w-44 px-3">
                <p class="font-bold mt-2">パスワード</p>
              </div>
              <div class="flex w-7/12 px-3 ml-4">
                <input class="w-full text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2" type="password" placeholder="※4文字以上20文字以内の半角英数字">
              </div>
            </div>
            <div class="flex flex-wrap -mx-3 mt-8">
              <div class="flex w-44 px-3">
                <p class="font-bold mt-2">パスワード(再入力)</p>
              </div>
              <div class="flex w-7/12 px-3 ml-4">
                <input class="w-full text-black border border-qa-darkGray rounded-md py-2 px-4 ml-2" type="password">
              </div>
            </div>
            <div class="ml-14 mt-40">
              <button type="submit" class="text-white w-52 bg-qa-blue rounded-lg px-5 py-2.5 text-center font-robotoFlex font-bold">上記の内容で登録する</button>
            </div>
          </form>
        </div>
        <div class="flex flex-row-reverse">
          <div class="mr-11 -my-11">
            <form>
              <button type="submit" class="text-white w-52 bg-qa-red2 rounded-lg px-5 py-2.5 text-center font-robotoFlex font-bold">退会する</button>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="mt-44"></div>
  </body>
</html>
