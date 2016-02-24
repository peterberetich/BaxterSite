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

    <title>Enroll - Baxter Academy</title>
    <!-- Bootstrap -->
	   <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/default.css" rel="stylesheet">

    <link href="css/history.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>

<style type="text/css">
  object {
  width: 100%;
  height: 500px;
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

<h2 class="fullwidthmission" style="margin-bottom: 15px">Enroll Now</h2>


<div class="col-md-2"></div>
<div class="col-md-8">
    <div class="panel-group" id="accordion">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title text-center">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
        Admissions Application</a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body">
        <iframe src="https://docs.google.com/forms/d/1EZ_zmfwdGoc2exFn72Kqm595e2bY3Gu0JxJBF3Bf-Cc/viewform?embedded=true" width="100%" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
      </div>
      <div class="panel-footer">
            <p class="text-center">Fill out the Admissions Form in a new window <a target="_blank" href='https://docs.google.com/forms/d/1EZ_zmfwdGoc2exFn72Kqm595e2bY3Gu0JxJBF3Bf-Cc/viewform'>here</a>
        </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">
      <h4 class="panel-title text-center">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
        Commitment to Enroll</a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body">
        <object data='documents/Commitment+to+Enroll+2016-2017.pdf'
                type='application/pdf'>
                    <p>It appears your Web browser is not configured to display PDF files. 
                    No worries, just<br/><a href='documents/Commitment+to+Enroll+2016-2017.pdf'>click here to download the PDF file.</a><br/>
                    </p>
        </object>
      </div>
        <div class="panel-footer">
            <p class="text-center">Download the Commitment to Enroll <a href='documents/Commitment+to+Enroll+2016-2017.pdf'>here</a>
        </div>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading accordion">
      <h4 class="panel-title text-center">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
        Letter of Intent</a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body">
        <object data='documents/lettor_of_intent_2016-2017.pdf'
                type='application/pdf'>
                    <p>It appears your Web browser is not configured to display PDF files. 
                    No worries, just<br/><a href='documents/lettor_of_intent_2016-2017.pdf'>click here to download the PDF file.</a><br/>
                    </p>
        </object>
        </div>
        <div class="panel-footer">
            <p class="text-center">Download the Letter of Intent <a href='documents/lettor_of_intent_2016-2017.pdf'>here</a>
        </div>
    </div>
  </div>
</div>
</div>
<div class="col-md-2"></div>

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