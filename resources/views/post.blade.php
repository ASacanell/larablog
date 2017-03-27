@extends('layouts.basic')

@section('content')
    <div class="content">
        <h1 style="color: deepskyblue">{{$post->title}}</h1>
        <p style="font-weight: bold">{{ $post->content }}</p>
    </div>
@endsection
