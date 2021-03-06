@extends('blog.layout')

@section('content')
    <div class="content">
        <div class="posts">
        @foreach ($posts as $post)
            <div class="post">
                <a class="post-title fancy" href="{{ url('/post/' . $post->id)}}">{{ $post->title }}</a>
                <hr class="post-hr">
                <div>{!! html_entity_decode($post->content) !!}</div>
            </div>
        @endforeach
        </div>
        <div class="post-pagination">
            @if($posts->count() > 0)
                {{ $posts->links() }}
            @endif
        </div>
    </div>
@endsection

