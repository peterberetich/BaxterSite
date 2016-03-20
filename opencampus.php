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
    <title>Open Campus - Baxter Academy</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet"> <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="css/default.css" rel="stylesheet">

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

<style type="text/css">
  object {
  width: 100%;
  height: 700px;
  border:0
}
</style>

<section id="history">
    <h2 id="mission" class="fullwidthmission">Open Campus</h2>
</section>
<div class="image" style="background-image: url('images/headerimages/opencampusbanner.jpg'); background-position: 50% 30%;"></div>
<br/>
<div class="centeredtext">
<object data='documents/open_campus_map.pdf'
        type='application/pdf'>
            <p>It appears your Web browser is not configured to display PDF files. 
            No worries, just<br/><a href='documents/open_campus_map.pdf'>click here to download the PDF file.</a><br/>
            </p>
</object>

<br/>
<div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title text-center">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Open Campus Contract</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse out">
      <div class="panel-body">
        <object data='documents/OpenCampusContract.pdf'
                type='application/pdf'>
                    <p>It appears your Web browser is not configured to display PDF files. 
                    No worries, just<br/><a href='documents/OpenCampusContract.pdf'>click here to download the PDF file.</a><br/>
                    </p>
        </object>
      </div>
      <div class="panel-footer">
            <p class="text-center">View the Open Campus Contract in a new window <a target="_blank" href='documents/OpenCampusContract.pdf'>here</a>
        </div>
    </div>
  </div>
<br/><br/><br/>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/plugins/jquery.capSlide.js"></script>
    <script src="js/plugins/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

  <script>
    $(document).ready(function () {
        
    });
  </script>

</body>
</html>
<?php COUCH::invoke(); ?>