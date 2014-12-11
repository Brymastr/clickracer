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

<div id="timed-game" class="row">
    <div id="click-counter" class="col-md-12 text-center">Click Counter</div>

</div>


@stop
