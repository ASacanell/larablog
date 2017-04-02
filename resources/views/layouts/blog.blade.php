@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/blog/styles.css') }}" rel="stylesheet">
@endsection

@section('header')
    @include('layouts.header')

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
