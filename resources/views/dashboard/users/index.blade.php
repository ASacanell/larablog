@extends('dashboard.layout')

@section('content')
    <!-- Modal content-->
    <div class="content">
        <div class="inner-content">
            <div class="modal-content custom-modal-content">
                <div class="modal-header">
                    <h4 class="modal-title custom-modal-title">Users</h4>
                </div>
                <div class="modal-body">
                    @foreach ($users as $user)
                        <div class="panel-body">
                            <span class="custom-post-title">{{ $user->name }}</span>
                        </div>
                        <hr class="modal-hr">
                    @endforeach
                    <div style="text-align: center">{{ $users->links() }}</div>
                </div>
            </div>
        </div>
    </div>

@endsection