@extends('layouts.default')

@section('content')

<?php

$user = Auth::user();
if(Auth::check()) {
    $highscore = DB::table('scores')->where('user_id', $user->id)->orderBy('score', 'desc')->first();
    $highscore = $highscore->score;
} else {
    $highscore = 0;
}
?>

<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<!-- Div for accepting clicks. Expands entire size of screen -->
{{--<div id="canvas"></div>--}}




{{ Form::open(array('route' => 'game.store', 'id' => 'save-game')) }}
    {{ Form::text('submit-score', 0, array('id' => 'submit-score')) }}
{{ Form::close() }}

@stop
