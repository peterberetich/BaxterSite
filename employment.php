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
    <title>Employment - Baxter Academy</title>
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
    <h2 id="mission" class="fullwidthmission">Employment Opportunities</h2>
</section>
<div class="image" style="background-image: url('images/headerimages/facultyheader.jpg'); background-position: center;"></div>
<br/>
<div class="centeredtext">
<cms:editable name='employment' type='richtext'>
Baxter Academy for Technology and Science
JOB DESCRIPTION: OPERATIONS OFFICER


Baxter Academy for Technology and Science, a public charter high school in Portland, Maine, seeks a Chief Operations Officer to assume responsibility for the school’s operations in its third start-up year. Reporting to the Head of School, the OO will establish school systems that ensure a safe, healthy, and happy school environment where teachers and students can focus on learning while operations staff handle the business side of the school.

Candidate must have strong managerial skills and a willingness to solve problems creatively within budget constraints. The appropriate candidate must be a team player with a service mindset who can collaborate within a hard-working, committed administration that cooperates closely with faculty, students, staff, and parents. Business background is a plus.

Responsibilities include:
Manage all non-instructional school operations, including: facilities, technology infrastructure, budget & finances, student enrollment, daily procedures & school schedule, student transportation, food service, HR, health & safety, compliance & reporting, and event planning
Maintain maximum enrollment through student recruitment outreach and effective waitlist management
Manage all vendor relationships and school contracts
Facilitate teacher subcommittees to address school-wide initiatives and special projects
Manage the part-time business manager to facilitate flow of financial transactions within the school.
Day-to-day problem solving to minimize impact on staff and maximize instruction
Strategic plan toward the long-term needs of the school
Support and maintain equipment and technology associated with a rigorous project-based STEM curriculum
Facilitate the process of locating and securing long-term home for BA in coordination with school leadership and facilities committee, architect, contractor.
Maintain facilities for cleanliness and safety by overseeing contracts and work plans for maintenance, janitorial services, security systems, service and support for lift, and snow removal, as well as working with the IT manager to meet and maintain capacity for technology demands.
Ensure student and staff safety by establishing equipment safety policies, implementing routine drills,  creating disaster-preparedness plans,  and planning with municipal agencies as appropriate.
Maintain appropriate transportation options that serve the needs of students within a large geographic region
Monitor student health needs and provide adequate services as needed; contract as necessary.

Candidate Qualities:
Commitment and passion toward school choice, STEM education, and project-based learning
Ability to balance urgent daily needs of the school with long term strategic planning
Roll-up-your-sleeves attitude that reflects the urgency and grit necessary to be effective in a startup environment
Customer service approach to serving teachers, students, and families
Bachelor’s degree required, Master’s Degree preferred (Business, Finance, Education, Policy)

</cms:editable>

<br/><br/><br/>
</div>
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