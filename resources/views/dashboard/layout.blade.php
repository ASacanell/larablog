@extends('layouts.dashboard')

@section('body')
    <div class="flex-blog">
        @include('dashboard.sidebar')
        @yield('content')
    </div>
@endsection