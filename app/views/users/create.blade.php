@extends('layouts.default')

@section('content')

<div class="form-container">

<div class="form-content">

    {{ Form::open(['route' => 'users.store']) }}
    <h1>ClickRacer</h1>
    <h3>Create your ClickRacer account to track your clicks</h3>

    {{ Form::text('username', null, array('placeholder' => 'Username', 'id' => 'username')) }}
    {{ Form::text('fname', null, array('placeholder' => 'First Name', 'id' => 'fname')) }}
    {{ Form::email('email', null, array('placeholder' => 'Email Address', 'id' => 'email')) }}
    {{ Form::password('password', array('placeholder' => 'Password', 'id' => 'password')) }}
    {{ $errors->first('email', '<span class=error>:message</span>') }}



    {{ Form::submit('REGISTER') }}


</div><!-- Close form-container -->
</div><!-- Close form-content -->
@stop