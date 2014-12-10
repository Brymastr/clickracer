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
    {{ HTML::style('css/main.css'); }}
    {{ HTML::script('js/vendor/modernizr-2.6.2.min.js'); }}
    <link href="http://getbootstrap.com/examples/sticky-footer/sticky-footer.css" rel="stylesheet">
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

    <div class="container">
        <div class="page-header">Page Header</div>
    </div>
    <footer class="footer">
        <div class="container">
            <p class="text-muted">dasdsfaf</p>
        </div>
    </footer>


    <!-- Scripts -->
    {{ HTML::script('//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js'); }}
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-2.1.1.min.js"><\/script>')</script>
    {{ HTML::script('js/plugins.js'); }}
    {{ HTML::script('js/main.js'); }}

</body>
</html>
