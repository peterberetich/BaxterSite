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
    <title>Contact Us - Baxter Academy</title>
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
    <h2 id="mission" class="fullwidthmission">Contact Us</h2>
</section>
    <div class="centered1000">
        <div class="row">
            <div class="col-lg-6" style="padding:0px 30px"><div class="centereddiv">
            <h4 class="page-header text-justified">Email addresses for staff members can be found on either the <a href="faculty">Faculty</a> or <a href="administration">Administration</a> page.   General inquiries can be made below, and we'll direct it to the right person. Thank you!</h4>
                    <form name="htmlform" method="post" action="html_form_send.php">
                      <label for="first_name">First Name *</label>
                      <input class="form-control"  type="text" name="first_name">
                      <label class="top5" for="last_name">Last Name *</label>
                      <input class="form-control" type="text" name="last_name">
                      <label class="top5" for="email">Email Address *</label>
                      <input class="form-control" type="text" name="email">
                      <label class="top5" for="telephone">Phone Number</label>
                      <input class="form-control" type="text" name="telephone">
                      <label class="top5" for="comments">Comments *</label>
                      <textarea class="form-control" name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                      <button class="btn btn-primary top5" type="submit" value="Submit">Submit</button>
                    </form>
                    </div></div>

            <div class="col-lg-6"><div class="centereddiv"><br/><br/>
            <div class="col-md-6 text-center">
                <p><b>Physical and Mailing Address:</b>
                    <br/>
                    Baxter Academy
                    <br/>
                    54 York Street, Portland, ME 04101
                    <br/><br/></p>
            </div>
            <div class="col-md-6 text-center">
                <p><b>Salt Facility Address:</b>
                    <br/>
                    Salt - Baxter Academy
                    <br/>
                    561 Congress Street, Portland, ME 04101
                    <br/><br/></p>
            </div>
            <div class="text-center"><p><b>Tele :</b> 1.207.699.5500
                    <br/>
                    <b>Fax :</b> 1.207.331.4831 </p><br></div>
                <div style="text-decoration:none; overflow:hidden; height:400px; width:100%; max-width:100%;"><div id="gmap-display" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Baxter+Academy+for+Technology+and+Science,+York+Street,+Portland,+ME,+United+States&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><style>#gmap-display img{max-width:none!important;background:none!important;font-size: inherit;}</style><script src="https://www.hostingreviews.website/google-maps-authorization.js?id=40fc9846-ccc2-c2dc-6ed8-94d00fdebff0&c=embedded-map-code&u=1458052675" defer="defer" async="async"></script></div>
                </div></div>
        </div>
    </div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/plugins/jquery.capSlide.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>
