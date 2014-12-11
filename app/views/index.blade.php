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
<div id="canvas"></div>


<div id="timed-game" class="row noselect">
    <div id="time-preface" class="preface col-md-12 col-xs-12 glyphicon glyphicon-time text-center"></div>
    <div id="click-counter" class="col-md-12 col-xs-12 text-center">0</div>

</div>


@stop
