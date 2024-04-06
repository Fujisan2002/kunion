<x-app-layout>
    <div class='posts'>
            @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <p class='body'>This is a sample body.</p>
                </div>
            @endforeach
        </div>
</x-app-layout>