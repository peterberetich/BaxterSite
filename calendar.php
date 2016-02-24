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
    <title>Calendar - Baxter Academy</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
<style type="text/css">
  object {
  width: 100%;
  border:0
}
</style>

<script language="javascript">
    function handleMessage(msg) {
      alert('got message '+msg);
    }
    function setupHandler() {
      document.getElementById("myPdf").messageHandler = { onMessage: handleMessage };
    }
</script>

  </head>
  <body>
  
<!--BEGIN NAV-->
<?php include('header.html'); ?>
<!--End of Navbar-->

<!-- insert in the document body -->

<h1 class="text-center" style="margin-top: 3rem; margin-bottom: 3rem">Baxter Academy 2015-2016 Calendar</h1>

<object data='documents/Baxter_2015_2016.pdf' 
        type='application/pdf'
        style="height: 900px">
            <p>It appears your Web browser is not configured to display PDF files. 
            No worries, just<br/><a href='documents/Baxter_2015_2016.pdf'>click here to download the PDF file.</a><br/>
                        </p>
</object>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/plugins/jquery.capSlide.js"></script>
    <script src="js/plugins/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>


</body>
</html>