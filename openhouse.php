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

    <title>Open House - Baxter Academy</title>
    <!-- Bootstrap -->
	   <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">

    <link href="css/history.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

	<script data-cfasync="false">
  		(function(r,e,E,m,b){E[r]=E[r]||{};E[r][b]=E[r][b]||function(){
		(E[r].q=E[r].q||[]).push(arguments)};b=m.getElementsByTagName(e)[0];m=m.createElement(e);
		m.async=1;m.src=("file:"==location.protocol?"https:":"")+"//s.reembed.com/G-A0G401.js";
		b.parentNode.insertBefore(m,b)})("reEmbed","script",window,document,"api");
	</script>

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
    <h2 class="fullwidthhistory">Open Houses</h2>
</section>

<div style="width: 60%; margin-left:auto; margin-right:auto">
<div><iframe width="100%" height="100%" src="https://www.youtube.com/embed/GobUJZrQdEc?rel=0" frameborder="0" allowfullscreen></iframe></div><br/><br/>
<cms:editable name='openhouse' type='richtext'>
    Baxter Academy hosts open houses for Prospective Students on three different evenings during the fall. During these evenings, between six and eight pm, students and their families have the opportunity to attend three workshops on a variety of topics related to life at Baxter. The majority of these workshops are lead by current Baxter students and provide incoming students with information about everything from Computer Science courses to the 9th grade experience.This year’s open houses were held on November 17th, December 10th, and January 13th. 
</cms:editable>
    </div>
<br/><br/><br/>
<section id="history">
    <h2 id="mission" class="fullwidthmission">Shadow Days</h2>
</section>

<div style="width: 60vw; margin-left:auto; margin-right:auto">
<cms:editable name='shadowdays' type='richtext'>
    Baxter Academy also hosts an “Open Day,” during which prospective students spend an (entire) day in the life of a Baxter student. Over the course of this day, prospective students will meet with a faculty advisor and upperclassmen mentor and attend content-area and elective classes. The 2016 Open Day will take place on January, 26th. 
</cms:editable>
      </div>

<br/><br/><br/><br/><br/><br/><br/>
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
  $(document).ready(function(){
    $('.singleitem').slick({
      adaptiveHeight: true
      });
  });
  </script>

</body>
</html>
<?php COUCH::invoke(); ?>