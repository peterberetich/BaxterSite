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

        <title>Parent Dashboard</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet"> <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="css/default.css" rel="stylesheet">
    <link href="css/history.css" rel="stylesheet">
    <link href="css/jquery.fancybox.css" rel="stylesheet">

  </head>
  <body>
<!--BEGIN NAV-->
<?php include('header.html'); ?>
<!--End of Navbar-->
<section class="history">
    <h2 class="fullwidthdashboard">Parent Dashboard</h2>
</section>
<div class="centerednav">
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <div class="col-lg-7 nopadding">
            <div class="col-sm-6">
              <div class="panel panel-primary">
                <div class="panel-heading text-center"><h1 id="dashheader">Events</h1></div>
                  <div class="panel-body dashpanel">
                    <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=baxter-academy.org_n8j1pe52cu4eii2nm0dtkfpcp4%40group.calendar.google.com&amp;color=%23691426&amp;ctz=America%2FNew_York" style="border-width:0" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="panel panel-primary">
                  <div class="panel-heading text-center"><h1 id="dashheader">Apps</h1></div>
                  <div class="panel-body dashpanel text-center">
                        <a href="https://maine.infinitecampus.org/campus/baxter.jsp" target="_blank" class="appbutton"><button type="button" class="btn btn-ic">Infinite <br/>Campus</button></a>
                        <a href="https://docs.google.com/document/d/1hslQ09snrSWzV6JnKGt69DG2yyIaSHzpDIX2vhlmw40/edit?ts=5693d8cc" target="_blank" class="appbutton"><button type="button" class="btn btn-gc">Wishlist</button></a>
                        <a href="gallery" target="_blank" class="appbutton"><button type="button" class="btn btn-gm">Gallery</button></a>
                        <div class="appbutton">
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank">
                        <input type="hidden" name="cmd" value="_s-xclick">
                        <input type="hidden" name="hosted_button_id" value="9NZEBBL3EQ89N">
                        <input type="submit" class="btn btn-success" style="height:56px" value="Donate to Baxter" name="Donate" alt="">
                        </form></div>
                        <!--a href="https://mail.google.com" target="_blank" class="appbutton"><button type="button" class="btn btn-success">Donate<br> to Baxter</button></a-->
                </div>
                </div>
              </div>
              </div>
            <div class="col-lg-5 nopadding">
             <div class="col-sm-12">
              <div class="panel panel-primary">
                  <div class="panel-heading text-center"><h1 id="dashheader">Forms + Policies</h1></div>
                  <div class="panel-body dashpanel scroll-y">
                    <cms:editable name='formsandpolicies' type='richtext'></cms:editable>
                  </div>
                </div>
            </div>
            </div>
            </div>
    <div class="col-lg-1"></div>
</div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
            <div class="col-sm-7">
              <div class="panel panel-primary">
                <div class="panel-heading text-center"><h1 id="dashheader">Michele's Updates</h1></div>
                  <div class="panel-body dashpanel">
                    <div id="widgetmain" style="text-align:left;overflow-y:auto;overflow-x:hidden;width:100%;background-color:#transparent; border:0px solid #333333;"><div id="rsswidget" style="height:230px;"><iframe src="http://us1.rssfeedwidget.com/getrss.php?time=1455140028465&amp;x=http%3A%2F%2Fbaxteracademy-english10-peter.blogspot.com%2Ffeeds%2Fposts%2Fdefault%3Falt%3Drss&amp;w=100%&amp;h=100%&amp;bc=333333&amp;bw=0&amp;bgc=transparent&amp;m=20&amp;it=false&amp;t=(default)&amp;tc=333333&amp;ts=15&amp;tb=transparent&amp;il=true&amp;lc=0000FF&amp;ls=14&amp;lb=false&amp;id=true&amp;dc=333333&amp;ds=14&amp;idt=true&amp;dtc=284F2D&amp;dts=12" border="0" hspace="0" vspace="0" frameborder="no" marginwidth="0" marginheight="0" style="border:0; padding:0; margin:0; width:100%; height:225px;" id="rssOutput">Reading RSS Feed ...</iframe></div><div style="text-align:right;margin-bottom:0;border-top:0px solid #333333;" id="widgetbottom"></div></div>
                </div>
              </div>
            </div>
            <div class="col-sm-5">
              <div class="panel panel-primary">
              <div class="panel-heading text-center"><a href="faqs" target="_blank"><h1 id="dashheader">FAQs</h1></a></div>
                  <div class="panel-body dashpanel scroll-y">
                    <cms:editable name='faqs' type='richtext'></cms:editable>
                  </div>
                </div>
            </div>
        </div>
    <div class="col-lg-1"></div>
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
