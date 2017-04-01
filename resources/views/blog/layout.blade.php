@extends('layouts.blog')

@section('body')
    <div class="flex-blog">
        @include('blog.sidebar')
        @yield('content')
    </div>
@endsection