@extends('layouts.blog')

@section('body')
    <div class="flex">
        @include('blog.sidebar')
        @yield('content')
    </div>
@endsection