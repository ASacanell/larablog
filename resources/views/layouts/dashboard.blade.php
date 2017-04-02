@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/dashboard/styles.css') }}" rel="stylesheet">
@endsection

@section('header')
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Blog') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        @if(Auth::user())
                            <a class="navbar-brand" href="{{ url('/dashboard') }}">
                                Dashboard
                            </a>
                            <a class="navbar-brand" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endif
                    @endif
                </ul>
            </div>
        </div>
    </nav>
@endsection

@section('body')
    @yield('content')
@endsection

@section('scripts')
    @parent
    @yield('scripts')
@endsection

