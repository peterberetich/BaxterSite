<?php include("password_protect.php"); ?>
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

        <title>Faculty Dashboard</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet"> <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="css/default.css" rel="stylesheet">
    <link href="css/history.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">

<style>
.flip-entry-last-modified {
    display: none!important;
}

flip-list-last-modified-header {
    display: none!important;
}
</style>

  </head>
  <body>
<!--BEGIN NAV-->
<?php include('header.html'); ?>
<!--End of Navbar-->
<section class="history">
    <h2 class="fullwidthdashboard">Faculty Dashboard</h2>
</section>
<div class="centerednav">
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
              <div class="panel panel-primary">
                <div class="panel-heading text-center"><h1 id="dashheader">Events</h1></div>
                  <div class="panel-body dashpanel">
                    <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showDate=0&amp;showPrint=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=300&amp;wkst=1&amp;bgcolor=%23ECF0F1&amp;src=baxter-academy.org_n8j1pe52cu4eii2nm0dtkfpcp4%40group.calendar.google.com&amp;color=%238C500B&amp;ctz=America%2FNew_York" style="border-width:0" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
                </div>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="panel panel-primary">
                  <div class="panel-heading text-center"><h1 id="dashheader">Apps</h1></div>
                  <div class="panel-body dashpanel text-center">
                        <a href="https://maine.infinitecampus.org/campus/baxter.jsp" target="_blank" class="appbutton"><button type="button" class="btn btn-ic">Infinite <br/>Campus</button></a>
                        <a href="https://classroom.google.com" target="_blank" class="appbutton"><button type="button" class="btn btn-gc">Google <br/>Classroom</button></a>
                        <a href="https://mail.google.com" target="_blank" class="appbutton"><button type="button" class="btn btn-gm">Gmail</button></a>
                        <a href="https://docs.google.com/a/baxter-academy.org/forms/d/1PHt4FIGXcdl2jkftOmYrvjlDPiSHzpLOYHg_VdMu_pw/viewform?c=0&w=1" target="_blank" class="appbutton"><button type="button" class="btn btn-warning">Wish List<br/>Submission</button></a>
                </div>
                </div>
              </div>
            <div class="col-sm-1"></div>
            </div>
    <div class="col-lg-2"></div>
</div>
</div>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
        <div>
            <div class="col-sm-1"></div>
            <div class="col-sm-5">
              <div class="panel panel-primary">
                <div class="panel-heading text-center"><h1 id="dashheader">Michele's Updates</h1></div>
                  <div class="panel-body dashpanel">
                    <div id="widgetmain" style="text-align:left;overflow-y:auto;overflow-x:hidden;width:100%;background-color:#transparent; border:0px solid #333333;"><div id="rsswidget" style="height:100%;"><iframe src="http://us1.rssfeedwidget.com/getrss.php?time=1463585972903&amp;x=http%3A%2F%2Fbaxterupdates.blogspot.com%2Ffeeds%2Fposts%2Fdefault%3Falt%3Drss&amp;w=100%&amp;h=100%&amp;bc=333333&amp;bw=0&amp;bgc=transparent&amp;m=20&amp;it=false&amp;t=(default)&amp;tc=333333&amp;ts=15&amp;tb=transparent&amp;il=true&amp;lc=0000FF&amp;ls=14&amp;lb=false&amp;id=true&amp;dc=333333&amp;ds=14&amp;idt=true&amp;dtc=284F2D&amp;dts=12" border="0" hspace="0" vspace="0" frameborder="no" marginwidth="0" marginheight="0" style="border:0; padding:0; margin:0; width:100%; height:225px;" id="rssOutput">Reading RSS Feed ...</iframe></div><div style="text-align:right;margin-bottom:0;border-top:0px solid #333333;" id="widgetbottom"><span style="font-size:70%"><a href="http://www.rssfeedwidget.com">rss feed widget</a>&nbsp;</span><br></div></div>
                </div>
              </div>
              </div>
            <div class="col-sm-5">
              <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1 id="dashheader">Forms</h1>
                  </div>
                  <div class="panel-body dashpanel" style="overflow-y: scroll; overflow-x: none">
                    <iframe src="https://drive.google.com/embeddedfolderview?id=0B3AnN9we9Ym8dVJtS1pmRERielE#list" width="100%" height="950px" frameborder="0"></iframe>
                </div>
              </div>
            </div>
            <div class="col-sm-1"></div>
        </div>
    <div class="col-lg-2"></div>
</div>
</div>
<div class="row">
    <div class="col-lg-2"></div>
    <div class="col-lg-8">
    <div>
            <div class="col-sm-1"></div>
            <div class="col-sm-10 text-right">
            <a class="btn btn-default" href="facultydash?logout=1">Logout</a>
            </div>
            <div class="col-sm-1"></div>
            </div>
    <div class="col-lg-2"></div>
</div>
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
  </script>

<!--FancyBox-->
        <script type="text/javascript" src="source/jquery.fancybox.pack.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $(".various").fancybox({
                    modal       : false,
                    maxWidth    : 1280,
                    maxHeight    : 720,
                    fitToView    : false,
                    width        : '80%',
                    height        : '80%',
                    autoSize    : false,
                    closeClick    : false,
                    openEffect    : 'none',
                    closeEffect    : 'none',
                    closeBtn    : true
                });
            });
        </script>

</body>
</html>
<?php COUCH::invoke(); ?>
