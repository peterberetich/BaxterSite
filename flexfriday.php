<?php require_once( 'couch/cms.php' ); ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!--Google Analytics Tag-->
        <script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o)
                    , m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-72313310-1', 'auto');
            ga('send', 'pageview');
        </script>
        <!--End Google Analytics Tag-->
        <link rel="icon" type="image/png" href="images/favicon/baxicon.png">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Flex Friday - BA</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <link href="css/default.css" rel="stylesheet">
        <link href="css/parallax.css" rel="stylesheet">
        <link href="css/history.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <style>
        h3 {
        font-family: 'Roboto', sans-serif!important;
        -webkit-hyphens: none;
        -moz-hyphens: auto;
        -ms-hyphens: auto;
        hyphens: auto;
        }
        </style>
        
        
    </head>

    <body>
        <!--BEGIN NAV-->
        <?php include('header.html'); ?>
            <!--End of Navbar-->
<div>
<section>
    <section class="topbar module parallax ff1">
      <div class="containerparallax">
        <h1>Flex Friday</h1>
      </div>
    </section>
    <section class="topbar module content">
        <div class="text-left centered1000"><br/>
            <cms:editable name='FFPart1' type='richtext'>
            <!--Content here-->
            </cms:editable><br/>
        </div>
    </section>
</section>

<section>
    <section class="topbar module parallax ff2">
      <div class="containerparallax">
        <h1>Collaboration</h1>
      </div>
    </section>
    <section class="topbar module content">
        <div class="text-left centered1000">
            <cms:editable name='FFPart2' type='richtext'>
            <!--Content here-->
            </cms:editable>
        </div>
    </section>
</section>

<section>
    <section class="topbar module parallax ff3">
      <div class="containerparallax">
        <h1>Perseverance</h1>
      </div>
    </section>
    <section class="topbar module content">
        <div class="text-left centered1000"><br/>
            <cms:editable name='FFPart3' type='richtext'>
            <!--Content here-->
            </cms:editable><br/>
        </div>
    </section>
</section>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/plugins/jquery.capSlide.js"></script>
    <script src="js/plugins/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    
</body>

</html>
<?php COUCH::invoke(); ?>