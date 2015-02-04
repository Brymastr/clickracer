<div id="register" class="row menu-block">
    <div class="row">
        <div class="col-md-12 col-xs-12 h1">Register</div>
    </div>
    {{ Form::open([null, 'class' => 'form-horizontal', 'id' => 'register-form']) }}
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::text('username-register', null, array('id' => 'username-register', 'class' => 'form-control input-lg text-center', 'placeholder' => 'Username')) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::password('password-register', array('id' => 'password-register', 'class' => 'form-control input-lg text-center', 'placeholder' => 'Password')) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            {{ Form::password('firstname-register', array('id' => 'firstname-register', 'class' => 'form-control input-lg text-center', 'placeholder' => 'First name')) }}
        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            {{ Form::submit('Submit', array('class' => 'btn btn-success', 'value' => 'Submit', 'id' => 'register-submit')) }}
        </div>
    </div>

    {{ Form::close() }}
</div>