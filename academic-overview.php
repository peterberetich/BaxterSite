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
    <h2 id="mission" class="fullwidthmission">Academic Overview</h2>
</section>
<div class="image" style="background-image: url('images/pentathlon1.jpg')"></div>
<br/>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8" style="margin: 0px 10px 0px 10px">
        <div class="col-md-1"></div>
        <div class="col-md-10">
        <cms:editable name='academic_overview' type='richtext'>
        Baxter Academy is a rigorous, college-preparatory high school promoting student ownership of learning through curriculum focused specifically on science, technology, engineering and math (STEM). Baxter Academy students study complex, real-world problems, using and building technological tools in a collaborative environment with scientists, engineers and other professionals.
        Baxter Academy sets high expectations for all students, develops social responsibility, promotes innovation and creativity, and produces graduates with a 21st century global perspective.  Students at Baxter Academy follow a standards-based curriculum for English language arts, mathematics, science, social studies, and the arts.  Upon graduation, students will have 21st century skills and will be able to continue their education, and be successful, at America’s best universities.
        Baxter Academy serves students with a strong interest in science, technology, engineering, and mathematics. We offer a challenging college-preparatory curriculum featuring outstanding and innovative teachers.  Our teachers help guide students to be passionate, self-directed learners by engaging their intellect and encouraging their imaginations by embracing technology-rich project-based learning.
        Baxter Academy also offers a strong humanities and foreign language curriculum to prepare students to be ethical leaders in the 21st century global economy.
        </cms:editable>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="col-lg-2"></div>
</div>
<br/><br/><br/>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/plugins/jquery.capSlide.js"></script>
  <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
  <script>
    $(document).ready(function () {
        
    });
  </script>

</body>
</html>
<?php COUCH::invoke(); ?>