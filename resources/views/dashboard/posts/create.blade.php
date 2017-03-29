@extends('layouts.app')

@section('content')
    <div id="content" style="padding-left: 5%; padding-right: 5%;">
        <h1>Write a new article</h1>
        <hr>
        {!! Form::open(['url' => '/dashboard/post/create/']) !!}

            <div class="form-group">
                {!! Form::label('title', "Title:") !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('content', "Content:") !!}
                {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'bodyeditor']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Add post', ['class' => 'btn btn-primary form-control']) !!}
            </div>

        {!! Form::close() !!}
    </div>
@endsection
