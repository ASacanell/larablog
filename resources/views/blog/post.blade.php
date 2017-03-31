@extends('layouts.blog')

@section('body')
    <div class="content">
        <h1 style="color: deepskyblue">{{$post->title}}</h1>
        <div style="font-weight: bold">{!! html_entity_decode($post->content) !!}</div>
    </div>
@endsection
