<x-app-layout>
   <!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>アンサンブル相手募集投稿</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>募集楽器</h2>
                <input type="text" name="post[title]" placeholder="募集している楽器名を記載"/>
            </div>
            <div class="body">
                <h2>募集要項</h2>
                <textarea name="post[body]" placeholder="レッスンの時間・日時、本番の日時、必要条件など"></textarea>
            </div>
            <input type="submit" value="投稿"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>
</x-app-layout>