@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading" style="text-align: center">Dashboard</div>
                    @foreach ($users as $user)
                        <div class="panel-body">
                            <span style="color: black">{{ $user->name }}</span>
                        </div>
                    @endforeach
                    <div style="text-align: center">{{ $users->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
