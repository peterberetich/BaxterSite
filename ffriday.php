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
    </head>

    <body>
        <!--BEGIN NAV-->
        <?php include('header.html'); ?>
            <!--End of Navbar-->

<section id="history">
    <h2 id="mission" class="history">Flex Friday</h2>
</section>

<div class="centerednav">
<section class="topbar module parallax ff1">
  <div class="containerparallax">
    <h1>Innovation</h1>
  </div>
</section>
<section class="topbar module content">
<div class="centered1000"><br/>
<cms:editable name='FFPart1' type='richtext'>

</cms:editable><br/>
</div>
</section>
<section class="topbar module parallax ff2">
  <div class="containerparallax">
    <h1>Collaboration</h1>
  </div>
</section>
<section class="topbar module content">
<div class="centered1000">
<cms:editable name='FFPart2' type='richtext'>
• Be a mentor. Share your expertise with students interested in learning more about the work you do—and what it takes to do it well. Your time is important to us, so you’ll give in a way that meets your needs.
• Our internship program has been designed around students creating “deliverables” requested by partnering organizations. Students apply internally for the internships and must provide evidence to a faculty committee that they have the necessary skills and background to successfully meet the “client’s” needs.
Examples of current internships include student teams making short documentaries for research institutes and hospitals; redesigning websites to integrate form and function; and working alongside scientists in labs.
• Flex Friday flagship projects use interlocking teams of students to extend research and development for and with industry/research partners.
We have teams of students working with industry leaders to improve student work while acquainting students with the real-world concerns of professionals in the field. Students use their CAD-skills to create prototypes. They crunch data. They do field research.
Industry leaders have recognized how these real-world efforts accelerate the development of innovative thinkers with important cutting-edge skills. While visiting Baxter, the founder of Boston Dynamics said, “The key skills we look for in job applicants at Boston Dynamics are the ones we see being developed by students at Baxter Academy—and those skills are sometimes hard to find even among strong college graduates.” At Baxter, we believe that real-world partnerships accelerate and amplify the learning that matters most.
Do you have a problem Baxter students can help solve? Tap it into our matching system here, and we’ll get back to you soon to see how Baxter students can best serve your needs.
</cms:editable>
</div>
</section>
<section class="topbar module parallax ff3">
  <div class="containerparallax">
    <h1>Perseverance</h1>
  </div>
</section>
<section class="topbar module content">
<div class="centered1000"><br/>
<cms:editable name='FFPart3' type='richtext'>

</cms:editable><br/>
</div>
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