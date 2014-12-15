<div id="login" class="row">
    <div class="row">
        <div class="col-md-12 col-xs-12 h1">Login</div>
    </div>
    {{ Form::open([null, 'class' => 'form-horizontal', 'id' => 'login-form']) }}
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::text('username-login', null, array('class' => 'form-control input-lg text-center', 'placeholder' => 'Username')) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::password('password-login', array('class' => 'form-control input-lg text-center', 'placeholder' => 'Password')) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{ Form::submit('Submit', array('class' => 'btn btn-success', 'value' => 'Submit', 'id' => 'login-submit')) }}
        </div>
    </div>

    {{ Form::close() }}
</div>