
<div class="modal fade" id="registerModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content custom-modal-content">
            <div class="modal-header">
                <i class="fa fa-times custom-modal-close" data-dismiss="modal"aria-hidden="true"></i>
                <h4 class="modal-title custom-modal-title">Register</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'register', 'method' => 'POST']) !!}

                <div class="form-group">
                    {!! Form::label('name', "Name") !!}
                    {!! Form::text('name', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', "E-mail Address:") !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', "Password:") !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', "Confirm password:") !!}
                    {!! Form::password('password-confirm', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Register', ['class' => 'btn form-control custom-modal-submit']) !!}
                </div>

                {!! Form::close() !!}
            </div>
        </div>

    </div>
</div>