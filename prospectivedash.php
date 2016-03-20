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
    <link href="css/bootstrap.css" rel="stylesheet"> <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="css/default.css" rel="stylesheet">
  </head>
  <body>
<!--BEGIN NAV-->
<?php include('header.html'); ?>
<!--End of Navbar-->
<br/>
<div class="row">
  <div class="col-lg-1"></div>
  <div class="col-lg-10">
    <div class="col-lg-3">
    <cms:editable name='main_content' type='richtext'>
      <div class="panel panel-default">
        <div class="panel-heading">Steps to enroll:</div>
          <div class="panel-body">
            <div class="checkbox">
              <input type="checkbox" value="">Step 1: Complete <a href="http://goo.gl/forms/EiV9qR5l46">Online Information Form</a>
            </div>
            <div class="checkbox">
              <input type="checkbox" value="">Step 2: Complete <a href="documents/lettor_of_intent_2016-2017.pdf">Letter of Intent</a></a>
            </div>
            <div class="checkbox">
              <input type="checkbox" value="">Step 3: After Feb. 4th, wait to be notified that either you have the right to enroll or that you’ll be part of a lottery to determine who has the right to enroll.
If necessary, a lottery will be held at <b> 6 p.m. on FEBRUARY 10, 2016</b>
            </div>
            <div class="checkbox">
              <input type="checkbox" value="">Step 4: Complete <a href="documents/lettor_of_intent_2016-2017.pdf">Letter of Intent</a></a>
            </div>
        </div>
      </div>
      </cms:editable>
    </div>
    <div class="col-lg-3">
      <div class="panel panel-default">
        <div class="panel-heading">
            
        </div>
        <div class="panel-body dashpanel">
            
        </div>
      </div>
    </div>
<br/>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/plugins/jquery.capSlide.js"></script>
    <script src="js/plugins/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

  <script>
    $(document).ready(function () {
        
    });
  $(document).ready(function(){
    $('.singleitem').slick({
      adaptiveHeight: true
      });
  });
  </script>

</body>
</html>
<?php COUCH::invoke(); ?>