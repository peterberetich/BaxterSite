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
    <title>Baxtitution and Baxpectations - Baxter Academy</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">

    <link href="css/history.css" rel="stylesheet">
<style type="text/css">
  object {
  width: 100%;
  border:0
}
</style>
  </head>
  <body id="top">
<!--BEGIN NAV-->
<?php include('header.html'); ?>
<!--End of Navbar-->
 
<section id="history">
    <h2 class="fullwidthhistory">Baxtitution</h2>
</section>

<div class="container-fluid">
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <object data='documents/Baxtitution.pdf' 
        type='application/pdf'
        style="height:1200px">
            <p>It appears your Web browser is not configured to display PDF files. 
            No worries, just<br/> <a href='documents/Baxtitution.pdf'>   Click here to download the PDF file.</a></p><br/>
            <a href='https://drive.google.com/file/d/0B4GBHfRscdXsdFBfQ2FJcVg3RktmcFdrZXlhLUhKZnJiNE80/view?usp=sharing'>   Or here to view it in Google Drive without downloading.</a>
        </object>
    </div>
    <div class="col-lg-1"></div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/plugins/jquery.capSlide.js"></script>
    <script src="js/plugins/owl.carousel.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script>
    $(document).ready(function () {
        $('.dropdown-toggle').dropdown();
    });
  </script>

</body>
</html>
<?php COUCH::invoke(); ?>