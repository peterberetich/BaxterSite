<!DOCTYPE html>
<html lang="en">
  <head>
    <!--Google Analytics Tag-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-72313310-1', 'auto');
      ga('send', 'pageview');
    </script>
  <!--End Google Analytics Tag-->
  	<link rel="icon" 
      type="image/png" 
      href="images/favicon/baxicon.png">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#457fdb">
    <title>About - Baxter Academy</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet"> <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="css/default.css" rel="stylesheet">
    <!--Lightbox css-->
    <link href="css/jquery.fancybox.css" rel="stylesheet">

    <link rel="stylesheet" href="plugins/animsition/css/animsition.css">

    <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
      
    <link href="css/jquery.bxslider.css" rel="stylesheet">

    <script type="text/javascript" src="js/webpjs-0.0.2.min.js"></script>

	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body style="min-height:100vh">
<!--BEGIN NAV-->
<?php include('header.html'); ?>
<!--End of Navbar-->
<div style="max-width: 1920; margin: 0 auto !important; float: none !important;">
<ul class="bxslider">
  <li>
    <div class="slideimage" style="background-image: url('images/carousel/carouselhistory.jpg'); background-position: center;"></div>
    <a href="history">
        <div class="textbox" style="margin-left: auto; margin-right: auto">
        What is Baxter?</div>
    </a>
    </li>
  <li>
    <div class="slideimage" style="background-image: url('images/carousel/facultycarousel.jpg'); background-position: center;"></div>
    <a href="faculty">
        <div class="textbox" id="staff" style="margin-left: auto; margin-right: auto">
        Who is Baxter?</div>
    </a>
  </li>
  <li>
    <div class="slideimage" style="background-image: url('images/carousel/fablab1.jpg'); background-position: center;"></div>
    <a href="flexfriday">
        <div class="textbox" id="flexfriday" style="margin-left: auto; margin-right: auto">
        What is Flex Friday?</div>
    </a>
    </li>
</ul>
</div>

<br/>
<div class="row">
<div class="col-md-2"></div>
<div class="col-md-8 centered1000">
    <div class="row">
            <div class="col-sm-4 text-right">
              <a class="various fancybox.iframe" href="http://www.youtube.com/embed/ooV86nrVc_Y?autoplay=1&amp;rel=0&amp;showinfo=0">
                <div class="panel panel-default" style="text-align:center">
                    <div class="panel-body"><img src="images/aboutthumbs/studentdoc.jpg" alt="" width="100%"/></div>
                    <div class="panel-footer"><p>Welcome to Baxter</p><span>Created by Baxter Students</span></div>
                </div>
              </a>
            </div>
        <div class="col-sm-4 text-center">
              <a class="various fancybox.iframe" href="http://www.youtube.com/embed/GobUJZrQdEc?autoplay=1&amp;rel=0&amp;showinfo=0">
                <div class="panel panel-default" style="text-align:center">
                    <div class="panel-body"><img src="images/aboutthumbs/oneminad.jpg" alt="" width="100%"/></div>
                    <div class="panel-footer"><p>1 Minute Ad</p><span>Created by Baxter Students</span></div>
                </div>
              </a>
        </div>
        <div class="col-sm-4 text-left">
              <a class="various fancybox.iframe" href="http://www.youtube.com/embed/nEoZpADixEo?autoplay=1&amp;rel=0&amp;showinfo=0">
                <div class="panel panel-default" style="text-align:center">
                    <div class="panel-body"><img src="images/aboutthumbs/whatwelearned.jpg" alt="" width="100%" /></div>
                    <div class="panel-footer"><p>What We've Learned</p><span>Created by Baxter Students</span></div>
                </div>
              </a>
        </div>
    </div>
</div>
<div class="col-md-2"></div>
</div>
<div class="text-center">
<a href="prospectivedash" class="btn btn-primary"><span>Plan your application!</span><br><span style="margin-top:3px" class="glyphicon glyphicon-th"></span></a>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
      <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
      <script src="js/plugins/jquery.capSlide.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/custom.js"></script>
      <script type="text/javascript" src="js/jquery.bxslider.js"></script>
<!--FancyBox-->
        <script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>
      
        <script type="text/javascript">
            $(document).ready(function() {
                $(".various").fancybox({
                    modal       : false,
                    maxWidth	: 1280,
                    maxHeight	: 720,
                    fitToView	: false,
                    width		: '80%',
                    height		: '80%',
                    autoSize	: false,
                    closeClick	: false,
                    openEffect	: 'none',
                    closeEffect	: 'none',
                    closeBtn    : true
                });
            });
        </script>
      
      <script type="text/javascript">
        $(document).ready(function(){
          $('.bxslider').bxSlider({
                mode: 'horizontal',
                touchEnabled: true,
                speed: 1200,
          });
          
          $(".bx-pager-link").click(function () {
            console.log('bla');            
            slider.stopAuto();
            slider.startAuto();
        });
        });
      </script>

</body>
</html>