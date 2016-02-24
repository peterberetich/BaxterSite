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
    <title>FAQs - Baxter Academy</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
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
    <h2 id="mission" class="fullwidthmission">Frequently Asked Questions</h2>
</section>
<div class="image" style="background-image: url('images/headerimages/faqbanner.jpg'); background-position: center;"></div>
<br/>
<div style="width: 60vw; margin-left:auto; margin-right:auto">
<p>
<cms:editable name='FAQs' type='richtext'>
What is Baxter Academy?
Baxter Academy is a public charter school in Portland, Maine. Its curriculum is rooted in inquiry and project-based learning and is connected across subjects. Baxter opened in fall 2013 with a learning community of 130 freshman and sophomore students from more than 20 Maine towns. Its teacher to student ratio is 1:16. It is free to attend Baxter Academy.
Where is Baxter Academy?
Baxter Academy is located in downtown Portland at 54 York Street.
Who is Baxter Academy?
Who are the students who thrive at Baxter?
Baxter students are innovative and ethical. They are curious and motivated. They are willing to take risks, to fail, and to reflect in order to learn. They are inclusive of others. They take personal responsibility but are geared towards collaboration. They are musicians and photographers, martial artists and dancers, quarterbacks and video gamers. They love reading. Or taking apart cars and putting them back together. They collect LPs or books or trains. They may dream of being a doctor, a video game inventor, a sustainability expert, a craftsman, a robotics engineer, a designer, a climatologist, a cancer researcher, a wildlife photographer, or a ____________.
What’s the faculty like?
Baxter faculty are innovative and ethical. They are curious and motivated. They are willing to take risks, to fail, and to reflect in order to learn. They are inclusive of others. They take personal responsibility but are geared towards collaboration. As a group, they have taught all over the United States and Ukraine and China. Together, they speak many languages and play many musical instruments. Some are from Maine. Some are from away. One has built robots on US military contracts and another has built kayaks from cedar strips. One has a degree in particle physics but also experiments with photographic techniques from the Civil War. One teaches chemistry and writes murder mysteries. Every one of them is attentive, responsive, and caring. And they are still learning. Every day.
What about the administration?
Baxter’s administrative staff are innovative and ethical. They are curious and motivated... You see where we’re going with this: We think it’s important that the adults in the school share the same wonderful traits as the students. The school’s executive director, Carl Stasio, brings wisdom and nearly three decades of leadership experience in Maine education. Head of School Michele LaForge brims over with creativity in designing the school around its unique mission—and she is nurturing and tough-minded, too. 
What’s different about Baxter Academy?
Baxter Academy offers a well-rounded education with an emphasis on deeply engaging students in hands-on study of science, technology, engineering, and math. Baxter has a robust and lively humanities department, as well as Mandarin language taught by a native speaker. Electives in 2013-14 have included music ensemble, photography, CAD, JAVA, furniture building, creative writing, journalism, and graphic design. Students engage in projects of their own choosing, as well as school-wide explorations that knit together the disciplines. On Fridays, the students work on FLEX FRIDAY group projects of their design and implementation. Each project has a faculty advisor. This year, some of those include an underwater robot, a canoe, a mural, a radio station, high-speed photography, video games, a green roof for the school, and mobility footgear for a virtual-reality platform. Inquiry leads the learning at Baxter. Students think for themselves. They analyze. They innovate. Busy work doesn’t happen here, but everyone is always busy with meaningful, exciting work.
Can my child attend Baxter Academy?
If your child is a Maine resident rising into the ninth tenth, or eleventh grade, he or she is eligible to enroll at Baxter. 
How do I enroll my student?
Fill out the online application, found on our Home Page, and send in a hard-copy Letter of Intent to Enroll to add your student's name to the waitlist. Follow the Admissions updates online at http://baxter-academy.org/admissions/. We host Open Houses in the Fall and Winter. The Open Enrollment period begins in December or January, ending with a Lottery held in February or March.
</cms:editable>
</p>

<br/><br/><br/>
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