<x-app-layout>
   <!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>アンサンブル相手募集投稿</h1>
        <form action="/kunion/store" method="POST">
            @csrf
            
            <div class="title">
                <h2>募集楽器</h2>
                <?//以下loginユーザーから楽器情報を引っ張るコード。?>
                <h2
                    <x-input-label for="major" :value />
                    <select name="major">
                        <option value=1>ピアノ</option>
                        <option value=2>声楽</option>
                        <option value=3>弦楽器</option>
                        <option value=4>管楽器</option>
                        <option value=5>打楽器（ピアノは含まない）</option>
                        <option value=6>ジャズ</option>
                        <option value=7>作曲</option>
                        <option value=8>コンピューター音楽</option>
                        <option value=9>音楽文化教育</option>
                    </select>
                </h2>
            </div>
            
            <div class="body">
                <h2>募集要項</h2>
                <textarea name="detail" placeholder="レッスンの時間・日時、本番の日時、必要条件など"></textarea>
            </div>
                <input type="submit" value="store"/>
        </form>
        
            <div class="footer">
                <a href="/dashboard">戻る</a>
            </div>
    </body>
</html>
</x-app-layout>