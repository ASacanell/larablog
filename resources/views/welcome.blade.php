@extends("layouts.basic")

@section("content")
    <div class="content">
        @foreach ($posts as $post)
            <a href="{{ url('/post/' . $post->id)}}"><h2>{{ $post->title }}</h2></a>
            <p style="font-weight: bold">{{ $post->content }}</p>
        @endforeach
        <div style="text-align: center;">
            {{ $posts->links() }}
        </div>
    </div>
@endsection