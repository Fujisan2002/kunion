<x-app-layout>
    <div class='kunion'>
            @foreach ($users as $user)
                <div class='user'>
                    <h2 class='title'>
                        <a href="/users/{{ $user->id }}">{{ $user->title }}</a>
                    </h2>
                    <p class='body'>This is a sample body.</p>
                </div>
            @endforeach
            
            
        @extends('layouts.app')

        @section('content')
            <h1>募集一覧</h1>
            <a href="{{ route('recruitments.create') }}" class="btn btn-primary">新規募集</a>
            <ul>
                @foreach($recruitments as $recruitment)
                    <li><a href="{{ route('recruitments.show', $recruitment) }}">{{ $recruitment->detail }}</a></li>
                @endforeach
            </ul>
        @endsection
    </div>
</x-app-layout>