# Laravel 10 使用帶有文字提示的 OpenAI 應用程式介面產生應用程式介面模擬資料

引入 yllw-digital 的 laravel-chatgpt-mock-api 套件來擴增使用帶有文字提示的 OpenAI 應用程式介面產生應用程式介面模擬資料，輸入文字提示來引導產生的內容，越來越符合使用者預期的需求。

## 使用方式
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產⽣ Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移，並執行資料庫填充（如果要測試的話）。
```sh
$ php artisan migrate --seed
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/api/mock-response/` 來進行應用程式介面模擬資料產生。

----

## 畫面截圖
![](https://i.imgur.com/Dlp6huQ.png)
> 只要提問的問題問得好，就越能得到更貼切的答案
