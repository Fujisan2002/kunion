<x-app-layout>
    <div>
        <form action="{{ route('index') }}" method="GET">
        <select name="major">
            <option value='null'></option>
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
        
        <input type="submit" value="検索">
      </form>
    </div>
    <h1>募集要項一覧</h1>
        <div class='posts bg-sky-200'>
            @foreach ($recruitments as $recruitment)
                <div class='post'>
                    <h2 class='name'>{{ $recruitment->user->nickname }}</h2>
                    <p class='detail'>{{ $recruitment->detail }}</p>
                    <p class='detail'>こちらにご連絡ください:{{ $recruitment->user->email }}</p>
                </div>
            @endforeach
        </div>
</x-app-layout>