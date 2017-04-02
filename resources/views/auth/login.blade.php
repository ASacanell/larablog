<div class="modal fade" id="loginModal" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content custom-modal-content">
            <div class="modal-header">
                <i class="fa fa-times custom-modal-close" data-dismiss="modal"aria-hidden="true"></i>
                <h4 class="modal-title custom-modal-title">Login</h4>
            </div>
            <div class="modal-body">
                {!! Form::open(['route' => 'login', 'method' => 'POST']) !!}

                <div class="form-group">
                    {!! Form::label('email', "E-mail Address:") !!}
                    {!! Form::email('email', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', "Password:") !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('remember', "Remember Me:") !!}
                    {!! Form::checkbox('remember', 'remember', true) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('Login', ['class' => 'btn form-control custom-modal-submit']) !!}
                </div>

                {!! Form::close() !!}

                <a class="btn custom-modal-forgot" href="#" data-toggle="modal" data-target="#resetModal">Forgot Your Password?</a>
            </div>
        </div>

    </div>
</div>
