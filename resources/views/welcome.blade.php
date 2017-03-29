@extends("layouts.basic")

@section("content")
    <div class="content">
        @foreach ($posts as $post)
            <a href="{{ url('/post/' . $post->id)}}"><h2>{{ $post->title }}</h2></a>
            <div style="font-weight: bold">{!! html_entity_decode($post->content) !!}</div>
        @endforeach
        <div style="text-align: center;">
            {{ $posts->links() }}
        </div>
    </div>
@endsection