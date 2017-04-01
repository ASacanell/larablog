<div class="modal fade" id="resetModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content custom-modal-content">
            <div class="modal-header">
                <i class="fa fa-times custom-modal-close" data-dismiss="modal"aria-hidden="true"></i>
                <h4 class="modal-title custom-modal-title">Reset Password</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'password.request', 'method' => 'POST']) !!}

                <div class="form-group">
                    {!! Form::label('email', "E-mail Address:") !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Reset Password', ['class' => 'btn form-control custom-modal-submit']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>

    </div>
</div>
