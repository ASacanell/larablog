<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Blog') }}</title>
    @include('layouts.base.scripts')
    @include('layouts.base.stylesheets')
    @section('styles')@show
</head>
<body>
    <div id="vue-app">
        <div class="full-height">
            @section('header')@show
            @section('body')@show
            @section('footer')@show
        </div>
    </div>
    @section('scripts')
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    @show
</body>
</html>
