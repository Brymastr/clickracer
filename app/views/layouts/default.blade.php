<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    {{ HTML::style('css/normalize.css'); }}
    {{ HTML::style('vendor/bootstrap/css/bootstrap.min.css'); }}
    {{ HTML::style('vendor/bootstrap/css/bootstrap-theme.min.css'); }}
    {{ HTML::style('vendor/bootstrap/css/sticky-footer.css'); }}
    {{ HTML::style('css/animate.css'); }}
    {{ HTML::style('css/main.css'); }}
    {{ HTML::script('js/vendor/modernizr-2.6.2.min.js'); }}

    {{ HTML::style('font/font-awesome-4.3.0/css/font-awesome.min.css'); }}
</head>
<body>
<!-- Google Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-56389593-1', 'auto');
    ga('require', 'displayfeatures');
    ga('send', 'pageview');
</script>

<!--[if lt IE 7]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

    <div class="container">
        @yield('content')
    </div>

    <footer id="menu" class="footer">
        <div class="container">
            <div class="row menu-block">
                <div class="col-md-12 header-title" id="header-title">
                    ClickRacer
                </div>
                @include('components.login-form')
                @include('components.register-form')
                <div class="col-md-12" id="username-title">
                    {{--user's name goes here--}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-xs-12 text-nowrap text-center">
                    <button id="start" type="button" class="btn-lg btn-block btn-primary">START</button>
                </div>
                <div class="col-md-4 col-xs-12 text-nowrap text-center">
                    <button id="login-btn" type="button" class="btn-lg btn-block btn-primary">LOGIN</button>
                </div>
                <div class="col-md-4 col-xs-12 text-nowrap text-center">
                    <button id="register-btn" type="button" class="btn-lg btn-block btn-primary">REGISTER</button>
                </div>
            </div>
        </div>
    </footer>


    {{ Form::open(array('route' => 'game.store', 'id' => 'save-game')) }}
        {{ Form::text('submit-score', 0, array('id' => 'submit-score')) }}
    {{ Form::close() }}

    <!-- Scripts -->
    {{ HTML::script('js/vendor/jquery-2.1.1.min.js'); }}
    {{ HTML::script('js/plugins.js'); }}
    {{ HTML::script('vendor/jquery.transit.min.js'); }}
    {{ HTML::script('js/main.js'); }}

</body>
</html>
