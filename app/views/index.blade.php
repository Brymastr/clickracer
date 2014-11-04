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
        {{ HTML::style('style/normalize.css'); }}
        {{ HTML::style('style/main.css'); }}
        {{ HTML::script('js/vendor/modernizr-2.6.2.min.js'); }}
    </head>
    <body>
    <!-- Google Analytics -->
    <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-56389593-1', 'auto');
      ga('send', 'pageview');
    </script>

        <div id="container" class="container noselect">

            <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
            <![endif]-->

            <!-- Div for accepting clicks. Expands entire size of screen -->
            <div id="canvas"></div>

            <div id="count">0</div>

            <div id="finish" class="overlay">
                <h1>Game Over</h1>
                <p>Score: <span id="score"></span></p>
                <span id="again">PLAY AGAIN</span>
            </div>

            <div id="content" class="overlay">
                <h1>Welcome to ClickRacer!</h1>
                <span id="start">START</span>
            </div>

        </div>

        <!-- Scripts -->
        {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'); }}
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-2.1.1.min.js"><\/script>')</script>
        {{ HTML::script('js/plugins.js'); }}
        {{ HTML::script('js/main.js'); }}

    </body>
</html>
