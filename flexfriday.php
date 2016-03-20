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
    <title>Flex Friday - Baxter Academy</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet"> <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="css/default.css" rel="stylesheet">

    <link href="css/history.css" rel="stylesheet">
    
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

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
    <h2 id="mission" class="fullwidthmission">About Flex Friday</h2>
</section>
<div class="centeredtext">
<div class="header-unit">
<div id="video-container">
<video autoplay loop muted>
<source src="images/headerimages/ffbanner.webm" type="video/webm"/>
<source src="images/headerimages/ffbanner.mp4" type="video/mp4"/>
Your browser does not support the video tag. I suggest you upgrade your browser.
</video>
</div><!-- end video-container -->
</div><!-- end .header-unit -->
<br/>
<cms:editable name='flexfriday' type='richtext'>
Outside of our national school system, work in the “real world” is about solving large-scale problems, learning from failure, building on previous work, collaborating with colleagues, critiquing and iterating designs, and managing time and resources. None of these is possible within the constraints of a conventional school schedule. Flex Friday is designed to alleviate many of these issues. It provides large blocks of time for students to perform lengthy experiments, immerse themselves in project design or research, and, through error analysis, learn from failure. Because all students have the same time available, groups of students are able to coalesce around projects of common interest and work collaboratively without scheduling difficulties. The significant amount of time permits students to work through a rigorous autonomous open-ended project development process, reaching beyond textbooks or previous learning to access the necessary information. Teachers, freed from other teaching obligations, are able to focus on advising students as they work through their projects, assisting with skill development and making sure they ask the right questions, follow through on their work plans and collaborate effectively within work groups. The blocks of time facilitate the development of web-based research skills and the ability to work with collaborating businesses and other institutions. While the nature of student projects varies, the underlying lessons are the same. Some students may choose to work in a large group to develop an experimental model for a fish hatchery, others may want to work individually on a writing a database program with a local company. In both cases students must work through prescribed procedures. Both cases require students to define the project objectives, be responsible for time, budget, and project management, and to devise iterative creative solutions to a given problem. In most cases, projects give back to the community. Flex Friday fosters the skills needed to succeed in the real world; these skills require time, responsibility, and creativity; and they are found outside of the standard high school curriculum. A student’s Flex Friday project begins with an idea. Finding student collaborators, and working with a teacher, students prepare a formal proposal describing the project details. Schedules, finances, outcomes, and connections to learning are all integral parts of that proposal. Once completed, the proposal is submitted for approval (or revision), and then the project and the project team is off and running. All students participate in a culminating, public Project Presentation at the end of the year.
</cms:editable>
</div>
<br/><br/><br/>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/plugins/jquery.capSlide.js"></script>
    <script src="js/plugins/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>
<?php COUCH::invoke(); ?>