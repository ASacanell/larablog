@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/blog/styles.css') }}" rel="stylesheet">
@endsection

@section('header')
    <div class="header">
        @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                       document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @else
                    <a href="#" data-toggle="modal" data-target="#loginModal">Login</a>
                    <a href="#" data-toggle="modal" data-target="#registerModal">Register</a>
                @endif
            </div>
        @endif
    </div>

    @include('auth.login')
    @include('auth.register')
    @include('auth.passwords.email')

@endsection

@section('body')
    @yield('content')
@endsection

@section('scripts')
    @parent
    @yield('scripts')
@endsection

