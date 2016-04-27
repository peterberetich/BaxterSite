<?php require_once( 'couch/cms.php' ); ?>
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
    <title>Baxter Academy</title>
    <!-- Bootstrap -->
<script src="http://code.jquery.com/jquery-latest.pack.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet"> <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="css/default.css" rel="stylesheet">
    <link href="css/history.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/waves.css" />
    <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto+Condensed|Open+Sans+Condensed:700" rel="stylesheet" type="text/css">

<!--Lightbox css-->
    <link href="css/jquery.fancybox.css" rel="stylesheet">

    <!--cache this damn shit-->
    <link rel="prerender" href="faqs.php">
    <link rel="prerender" href="baxtitution.php">
    <link rel="prerender" href="studentgov.php">
    <link rel="prerender" href="opencampus.php">
    <link rel="prerender" href="flexfriday.php">
    <link rel="prerender" href="gallery.php">

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

<div class="text-center centerednav">
<h1 style="margin: 3vh auto; font-size: 9vh; font-family: 'Roboto Condensed', sans-serif;">THE BAXTER EXPERIENCE</h1>
</div>
<div class="centerednav" id="experience">
<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-10">
    <div class="col-sm-4">
        <div class="card" style="width:100%">
            <a href="faqs">
            <div class="card-image">
                <div class="responsiveimage" style="background-image: url('images/headerimages/faqbannercomp.jpg'); background-position: center;"></div>
            </div>
            <div class="card-content text-center">
                <span class="card-title">FAQs</span>
            </div>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card" style="width:100%">
            <a href="baxtitution">
            <div class="card-image">
                <div class="responsiveimage" style="background-image: url('images/headerimages/baxtitutionbanner.jpg'); background-position: left top;"></div>
            </div>
            <div class="card-content text-center">
                <span class="card-title">Baxtitution</span>
            </div>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card" style="width:100%">
            <a href="studentgov">
            <div class="card-image">
                <div class="responsiveimage" style="background-image: url('images/headerimages/senatebannercomp.jpg'); background-position: center;"></div>
            </div>
            <div class="card-content text-center">
                <span class="card-title">Student Government</span>
            </div>
            </a>
        </div>
    </div>
</div>
<div class="col-lg-1"></div>
</div>
<div class="row">
<div class="col-lg-1"></div>
<div class="col-lg-10">
    <div class="col-sm-4">
        <div class="card" style="width:100%">
            <a href="opencampus">
            <div class="card-image">
                <div class="responsiveimage" style="background-image: url('images/headerimages/opencampusbannercomp.jpg'); background-position: center;"></div>
            </div>
            <div class="card-content text-center">
                <span class="card-title">Open Campus</span>
            </div>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card" style="width:100%">
            <a href="flexfriday">
            <div class="card-image">
                <div class="responsiveimage" style="background-image: url('images/carousel/fablab1.jpg'); background-position: center;"></div>
            </div>
            <div class="card-content text-center">
                <span class="card-title">Flex Friday</span>
            </div>
            </a>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card" style="width:100%">
            <a href="gallery">
            <div class="card-image">
                <div class="responsiveimage" style="background-image: url('images/headerimages/gallerybannercomp.jpg'); background-position: center;"></div>
            </div>
            <div class="card-content text-center">
                <span class="card-title">Gallery</span>
            </div>
            </a>
        </div>
    </div>
</div>
<div class="col-lg-1"></div>
</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/plugins/jquery.capSlide.js"></script>
<script src="js/plugins/owl.carousel.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript" src="js/waves.js"></script>
<script>
    $(document).ready(function () {

    });
</script>

<script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>

<script>
      $( "#overlay-menu" ).click(function() {
        $( ".overlay" ).addClass
        ('overlay-open');
      });
    </script>
    <script>
    $( ".overlay-close" ).click(function() {
      $( ".overlay" ).removeClass
      ( 'overlay-open' );
      });
    </script>

</body>
</html>
<?php COUCH::invoke(); ?>
