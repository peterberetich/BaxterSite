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
    <title>Board Minutes - Baxter Academy</title>
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

<section id="history">
    <h2 id="mission" class="fullwidthmission">Forms and Policies</h2>
</section>

<div class="center-block"></div>

<div class="row">
    <div class="col-lg-3"></div>
        <div class="col-lg-6">
        <div class="centereddiv">
        <cms:editable name='formsandpolicies' type='richtext'>
            Forms and Policies
Forms
Admissions & Enrollment Forms
https://docs.google.com/forms/d/1fn3jMu5O6ox8gRhlhEHP2vKVcgkIBn9G_VSkSmS_y1o/viewform?c=0&w=1
https://docs.google.com/forms/d/1Q8gXhGEq964AATW-fQZbiqwumzfEqy-A7tqOPvTFhXk/viewform?c=0&w=1
http://static1.squarespace.com/static/51e4a401e4b0ead5a3b591b5/t/565df24de4b03071352b6627/1448997453444/letter+of+intent+to+enroll+2016-2017.pdf 
http://static1.squarespace.com/static/51e4a401e4b0ead5a3b591b5/t/565dadf9e4b011b0652872f0/1448979961881/Commitment+to+Enroll+2016-2017+%281%29.pdf

Forms for Current Baxter Families
http://static1.squarespace.com/static/51e4a401e4b0ead5a3b591b5/t/5243176ae4b05e6659f0a7dc/1380128618527/Med+Authorization+Form.pdf
http://static1.squarespace.com/static/51e4a401e4b0ead5a3b591b5/t/530cb432e4b07902c6478f61/1393341490640/OpenCampusContract2013-14+%283%29.pdf
http://static1.squarespace.com/static/51e4a401e4b0ead5a3b591b5/t/52af52eae4b0e4e1cebceb56/1387221738589/Remind+101.pdf
http://static1.squarespace.com/static/51e4a401e4b0ead5a3b591b5/t/564df7cce4b0725efa7ce098/1447950284509/FREE+AND+REDUCED+PRICE+SCHOOL+MEAL+APPLICATION.pdf
http://static1.squarespace.com/static/51e4a401e4b0ead5a3b591b5/t/5283de94e4b0a6f04e676b01/1384373908625/Copy_of_FamilyOrderFormBrand+FamilyOrderFormBrand.pdf
http://static1.squarespace.com/static/51e4a401e4b0ead5a3b591b5/t/55f1ba5ae4b0f5a6cc392161/1441905242693/Laptop+use+form2015-2016.pdf
Forms for Current Baxter Students
https://docs.google.com/a/baxter-academy.org/forms/d/1Zsbv9kRbJj1SGy1ekLSsH1XwQw8pXu6ZEE2YFY8T4CY/viewform
https://docs.google.com/a/baxter-academy.org/forms/d/10XQpdPnbILXgfGmxeSUGqj1m_Re7TlGfirxehmkipqc/viewform?edit_requested=true
http://static1.squarespace.com/static/51e4a401e4b0ead5a3b591b5/t/55f1ba5ae4b0f5a6cc392161/1441905242693/Laptop+use+form2015-2016.pdf
Policies
Various Policies
http://static1.squarespace.com/static/51e4a401e4b0ead5a3b591b5/t/55ccfa65e4b0dc6eee3e3c46/1439496805553/Baxter+Policy+%282%29.pdf

Behavior Management and Discipline Policy

        </cms:editable>
        </div>
        </div>
    <div class="col-lg-3"></div>
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
  $(document).ready(function(){
    $('.singleitem').slick({
      adaptiveHeight: true
      });
  });
  </script>

</body>
</html>
<?php COUCH::invoke(); ?>