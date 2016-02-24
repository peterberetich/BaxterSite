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
    <title>Student Government - Baxter Academy</title>
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
    <h2 class="fullwidthhistory">Senate</h2>
</section>

<div class="image" style="background-image: url('images/headerimages/senatebanner.jpg'); background-position: center;"></div>
<br/>

<div style="width: 60%; margin-left:auto; margin-right:auto">
<p>
<cms:editable name='senatecontent' type='richtext'>
The Student Senate serves as the legislative branch of student government at Baxter Academy and ensures that students have a voice in creating and evaluating school policy. The Student Senate is composed of one senator from each of Baxter Academy’s advisory groups, a total of twenty-four. These senators are elected at the beginning of each year by the members of their respective advisories and, as such, serve as their representatives. The Student Senate has two faculty advisors; their role is to facilitate meetings and to disseminate information on those proceedings, including legislation, proposals, or memoranda, to the full faculty or the board. The Student Senate has served a variety of roles at Baxter, but its primary function has been the establishment and promotion of the school’s community norms. Early in the 2013-14 school year, with guidance from the faculty and student body, the Student Senate drafted and revised a school constitution. This constitution, known as the Baxtitution (see appendix 1), has been ratified by the faculty and currently serves as our official norms. Future amendments to the Baxtitution, should they become necessary, will be written by the Student Senate and ratified by the faculty. Any student accused of violating the norms enumerated in the Baxtitution is placed on our Behavior Step Ladder and, in most cases, is referred to our Student Judiciary Board, the judicial branch of student government. To carry out its legislative work, the Student Senate has taken on an advisory role. Senators report any issues brought to their attention by their constituents (i.e. fellow advisees) to the Senate. If the Senate determines that the issue is significant enough to weigh in on, it is handed off to one of the six subcommittees that have been formed to mirror and collaborate with the six standing faculty committees. A subcommittee can be tasked with drafting a policy memorandum or proposal to pass on to its partnering faculty committee. It can also be charged, by its partnering committee, to give feedback on a faculty proposal. The committees are as follows: Non-Formal Learning, School Culture, School Community, Community Connections, Operations and Facilities, and Academics. These partnerships give the student body a significant voice in policy formation and administration at Baxter Academy. 

</cms:editable>
</p>
    </div>
<br/><br/><br/>
<section id="history">
    <h2 id="mission" class="fullwidthmission">Judiciary Board</h2>
</section>

<div style="width: 60vw; margin-left:auto; margin-right:auto">
<p>
<cms:editable name='jboardcontent' type='richtext'>
The Student Judiciary Board at Baxter Academy serves as the judicial branch of Baxter Academy Governance. While it is the responsibility of the Student Senate to inform the development of school norms and our Baxtitution, it is the responsibility of the Judiciary Board to hold members of our community accountable for violating the school norms as explained in the Baxtitution. As a result, students appearing before the Judiciary Board who are found guilty of violating school norms receive timely and appropriate consequences for their actions. It is important to note that all Judiciary Board proceedings are confidential. The Judiciary Board is composed entirely of students. There is a faculty advisor who facilitates the hearing protocol and interacts with the principal, student defendant, parents, and other faculty members as needed. The faculty advisor also keeps track of cases and evaluates the completed consequences assigned by the student board. A student who violates the Baxtitution may have a hearing before the Judiciary Board, or may choose to deal directly with administration. If the student chooses the hearing, then the Judiciary Board is convened. The charge is read and the student is given an opportunity to explain his or her actions. The student’s parents and advisor are invited to give any insight into why the student might have behaved in the manner being suggested. Throughout the hearing, the Jurors are allowed to ask questions. Once the hearing is completed, the Jurors vote on the guilt or innocence of the student defendant. If found guilty of the charge, the Jurors determine appropriate consequences. The goal is to help the student defendant learn from this mistake and change the behavior so that it is not repeated. For example, a student found guilty of sexual harassment might have to research the consequences of this behavior in the workplace, create a public service announcement of some kind (video, poster, radio spot), and write a reflection about what that student learned and how his or her behavior impacted the victim. This type of consequence is specific to the behavior and the student is more likely to learn than from a detention or a suspension. In some extreme cases, administration may need to take swift and clear action to insure student safety. Those are not cases for the Judiciary Board.
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