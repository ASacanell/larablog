@extends('layouts.dashboard')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center">Dashboard</div>
                    @foreach ($posts as $post)
                        <div class="panel-body">
                            <a href="{{ url('/dashboard/post/edit/' . $post->id)}}"><span style="color: black">{{ $post->title }}</span></a>
                            <a href="{{ url('/dashboard/post/delete/' . $post->id)}}"><i class="fa fa-times" style="color: red; float: right;" aria-hidden="true"></i></a>
                        </div>
                    @endforeach
                    <div style="text-align: center">{{ $posts->links() }}</div>
                    <hr>
                    <div style="text-align: center">
                        <a href="{{ url('/dashboard/post/create/')}}"><p class="fa fa-plus fa-2x" aria-hidden="true"></p></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
