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
    <title>How to Apply - Baxter Academy</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet"> <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="css/default.css" rel="stylesheet">

    <link href="css/history.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="css/buttons.css" rel="stylesheet">
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
    <h2 id="mission" class="fullwidthdash">How to Apply</h2>
</section>

<div class="centeredtext">

<div class="well well-lg">
<cms:editable name='HowToApplyIntro' type='richtext'>
The regular application period for 2016-2017 begins at 9 am on Tuesday, December 1, 2015, and closes at 4 p.m. on Thursday, February 4, 2016. If applications exceed available slots, as is expected, a lottery will be held on Wednesday, February 10.
Prospective students will have a chance to experience Baxter at our Baxter Academy Open Day on January 26, 2016.  Students will partake in a sample day at Baxter that includes a walk around our Open Campus, a seminar about Flex Friday, and a day of sample classes.  If you are interested in attending our Open Day, please click HERE! Students must attend an Open House prior to attending BA Open Day.
</cms:editable>
</div>

<div class="panel panel-primary">
<div class="panel-heading"><strong><span style="font-size:2em">STEP ONE:</span></strong></div>
<div class="panel-body">
<cms:editable name='StepOne' type='richtext'>
Beginning on December 1, complete the online information form HERE
</cms:editable>
</div>
</div>

<div class="panel panel-primary">
<div class="panel-heading"><strong><span style="font-size:2em">STEP TWO:</span></strong></div>
<div class="panel-body">
<cms:editable name='StepTwo' type='richtext'>
Print and complete the LETTER OF INTENT on the website, and mail or email it to it to:
Tia Howe - Admissions Manager (tia.howe@baxter-academy.org)
Baxter Academy
54 York Street
Portland, ME 04101
The school must receive this document by 4 p.m. on February 4, 2016, in order for you to be eligible to enroll (if the number of applicants does not exceed the number of slots available) or to participate in a lottery to determine who may enroll.
</cms:editable>
</div>
</div>

<div class="panel panel-primary">
<div class="panel-heading"><strong><span style="font-size:2em">STEP THREE:</span></strong></div>
<div class="panel-body">
<cms:editable name='StepThree' type='richtext'>
Soon after the regular application period ends on February 4, you’ll be notified either that you have the right to enroll or that you’ll be part of a lottery to determine who has the right to enroll.
IF A LOTTERY IS NECESSARY, it will be held at 6 p.m. on FEBRUARY 10, 2016
Please check the website for updates about Baxter’s lottery process. At the time of the lottery, the order of the waitlist will be determined for students who did not receive a spot.
Please note: All siblings of current students will be admitted prior to a lottery. Baxter Academy also gives enrollment preference to children of the school’s full-time employees, board members, and founders, as long as they constitute no more than 10% of the school’s total student population.
</cms:editable>
</div>
</div>

<div class="panel panel-primary">
<div class="panel-heading"><strong><span style="font-size:2em">STEP FOUR:</span></strong></div>
<div class="panel-body">
<cms:editable name='StepFour' type='richtext'>
If you are notified that you have the right to enroll, you will then have 14 days to file your COMMITMENT TO ENROLL at Baxter Academy. Once the school receives this form, your spot at Baxter will be secure. You always have the option to choose to relinquish your spot at any time.
Any student applying after the lottery in February will be placed on the waitlist according to timestamp.
</cms:editable>
</div>
</div>

</div>
<br/><br/><br/>
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