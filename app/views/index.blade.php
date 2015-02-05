@extends('layouts.default')

@section('content')

<div id="canvas" oncontextmenu="return false"></div>

<div id="timed-game" class="row noselect">
    <div id="time-preface" class="preface col-md-12 col-xs-12 glyphicon glyphicon-time text-center"></div>
    <div id="click-counter" class="col-md-12 col-xs-12 text-center">0</div>
</div>


@stop
