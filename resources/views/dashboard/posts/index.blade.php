@extends('dashboard.layout')

@section('content')
        <!-- Modal content-->
        <div class="content">
            <div class="inner-content">
                <div class="modal-content custom-modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title custom-modal-title">Posts</h4>
                    </div>
                    <div class="modal-body">
                        @foreach ($posts as $post)
                        <div class="panel-body">
                            <a href="{{ url('/dashboard/post/edit/' . $post->id)}}"><span class="custom-post-title">{{ $post->title }}</span></a>
                            <a href="{{ url('/dashboard/post/delete/' . $post->id)}}"><i class="fa fa-times custom-modal-close" aria-hidden="true"></i></a>
                            <hr class="modal-hr">
                        </div>
                        @endforeach
                        <div style="text-align: center">{{ $posts->links() }}</div>
                        <div class="submit-container">
                            <a class="submit-link" href="{{ url('/dashboard/post/create/')}}"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection