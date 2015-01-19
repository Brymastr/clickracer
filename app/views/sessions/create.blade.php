@extends('layouts.default')

@section('content')

<div class="form-container">

<div class="form-content">

    {{ Form::open(['id' => 'login-form']) }}
    <h1>ClickRacer</h1>
    <h3>Create your ClickRacer account to track your clicks</h3>

    {{ Form::text('username', null, array('placeholder' => 'Username', 'id' => 'username')) }}
    {{ Form::password('password', array('placeholder' => 'Password', 'id' => 'password')) }}

    {{ Form::submit('login') }}


</div><!-- Close form-container -->
</div><!-- Close form-content -->
@stop