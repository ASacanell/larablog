@extends('layouts.dashboard')

@section('scripts')
    <script src="{{ asset('js/simplemde.min.js') }}"></script>
    <script>
        new SimpleMDE({ element: document.getElementById("bodyEditor") });
    </script>
@endsection

@section('content')
    <div id="content" style="padding-left: 5%; padding-right: 5%;">
        <h1>Edit the article</h1>
        <hr>
        {!! Form::open(['url' => '/dashboard/post/edit/' . $post->id, 'method' => 'PUT']) !!}

            <div class="form-group">
                {!! Form::label('title', "Title:") !!}
                {!! Form::text('title', $post->title, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('content', "Content:") !!}
                {!! Form::textarea('content', $post->content, ['class' => 'form-control', 'id' => 'bodyEditor']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Edit post', ['class' => 'btn btn-primary form-control']) !!}
            </div>

        {!! Form::close() !!}
    </div>
@endsection
