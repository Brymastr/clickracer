@extends('layouts.default')

@section('content')

<div id="container" class="container noselect">

    <!--[if lt IE 7]>
    <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Div for accepting clicks. Expands entire size of screen -->
    <div id="canvas"></div>

    <div id="count">0</div>

    <div id="finish" class="overlay">
        <h1>Game Over</h1>
        <div>SCORE: <span id="score"></span></div>
        <a id="again" class="clickable">PLAY AGAIN</a>
    </div>

    <div id="content" class="overlay">
        <h1>Welcome to ClickRacer!</h1>
        <a id="start" class="clickable">START</a>
        <?php if(!Auth::check()) {?>
            {{ HTML::linkRoute('sessions.create', 'LOGIN') }}
            {{ HTML::linkRoute('users.create', 'REGISTER') }}
        <?php } ?>

    </div>

</div>

@stop
