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
      
    <link href="css/jquery.fancybox.css" rel="stylesheet">

  </head>
  <body>
<!--BEGIN NAV-->
<?php include('header.html'); ?>
<!--End of Navbar-->
<br/>
<div class="centerednav">
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <div>
            <div class="col-sm-4">
              <div class="panel panel-primary">
                <div class="panel-heading text-center"><h1 id="dashheader">Events</h1></div>
                  <div class="panel-body dashpanel">
                    <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=baxter-academy.org_n8j1pe52cu4eii2nm0dtkfpcp4%40group.calendar.google.com&amp;color=%23691426&amp;ctz=America%2FNew_York" style="border-width:0" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="panel panel-primary">
                  <div class="panel-heading text-center"><h1 id="dashheader">Apps</h1></div>
                  <div class="panel-body dashpanel text-center">
                        <a href="https://maine.infinitecampus.org/campus/baxter.jsp" target="_blank" class="appbutton"><button type="button" class="btn btn-ic">Infinite <br/>Campus</button></a>
                        <a href="https://classroom.google.com" target="_blank" class="appbutton"><button type="button" class="btn btn-gc">Google <br/>Classroom</button></a>
                        <a href="https://mail.google.com" target="_blank" class="appbutton"><button type="button" class="btn btn-gm">Gmail</button></a>
                </div>
                </div>
              </div>
            <div class="col-sm-4">
              <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1 id="dashheader">Forms</h1>
                  </div>
                  <div class="panel-body dashpanel" style="overflow-y: scroll">
                    <iframe src="https://drive.google.com/embeddedfolderview?id=0B3AnN9we9Ym8dVJtS1pmRERielE#list" width="100%" height="815px" frameborder="0"></iframe>
                </div>
              </div>
            </div>
        </div>
    <div class="col-lg-1"></div>
</div>
</div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <div>
            <div class="col-sm-4">
              <div class="panel panel-primary">
                <div class="panel-heading text-center"><h1 id="dashheader">Events</h1></div>
                  <div class="panel-body dashpanel">
                    <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23ffffff&amp;src=baxter-academy.org_n8j1pe52cu4eii2nm0dtkfpcp4%40group.calendar.google.com&amp;color=%23691426&amp;ctz=America%2FNew_York" style="border-width:0" width="100%" height="100%" frameborder="0" scrolling="no"></iframe>
                </div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="panel panel-primary">
                  <div class="panel-heading text-center"><h1 id="dashheader">Apps</h1></div>
                  <div class="panel-body dashpanel text-center">
                        <a href="https://maine.infinitecampus.org/campus/baxter.jsp" target="_blank" class="appbutton"><button type="button" class="btn btn-ic">Infinite <br/>Campus</button></a>
                        <a href="https://classroom.google.com" target="_blank" class="appbutton"><button type="button" class="btn btn-gc">Google <br/>Classroom</button></a>
                        <a href="https://mail.google.com" target="_blank" class="appbutton"><button type="button" class="btn btn-gm">Gmail</button></a>
                </div>
                </div>
              </div>
            <div class="col-sm-4">
              <div class="panel panel-primary">
                <div class="panel-heading text-center">
                    <h1 id="dashheader">Forms</h1>
                  </div>
                  <div class="panel-body dashpanel" style="overflow-y: scroll">
                    <iframe src="https://drive.google.com/embeddedfolderview?id=0B3AnN9we9Ym8dVJtS1pmRERielE#list" width="100%" height="815px" frameborder="0"></iframe>
                </div>
              </div>
            </div>
        </div>
    <div class="col-lg-1"></div>
</div>
</div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <div class="col-lg-6" id="nopad">
            <div class="col-sm-12">
              <div class="panel panel-primary">
                <div class="panel-heading text-center"><h1 id="dashheader">Michele's Updates</h1></div>
                  <div class="panel-body dashpanel">
                    <div id="widgetmain" style="text-align:left;overflow-y:auto;overflow-x:hidden;width:100%;background-color:#transparent; border:0px solid #333333;"><div id="rsswidget" style="height:230px;"><iframe src="http://us1.rssfeedwidget.com/getrss.php?time=1455140028465&amp;x=http%3A%2F%2Fbaxteracademy-english10-peter.blogspot.com%2Ffeeds%2Fposts%2Fdefault%3Falt%3Drss&amp;w=100%&amp;h=100%&amp;bc=333333&amp;bw=0&amp;bgc=transparent&amp;m=20&amp;it=false&amp;t=(default)&amp;tc=333333&amp;ts=15&amp;tb=transparent&amp;il=true&amp;lc=0000FF&amp;ls=14&amp;lb=false&amp;id=true&amp;dc=333333&amp;ds=14&amp;idt=true&amp;dtc=284F2D&amp;dts=12" border="0" hspace="0" vspace="0" frameborder="no" marginwidth="0" marginheight="0" style="border:0; padding:0; margin:0; width:100%; height:225px;" id="rssOutput">Reading RSS Feed ...</iframe></div><div style="text-align:right;margin-bottom:0;border-top:0px solid #333333;" id="widgetbottom"></div></div>
                </div>
              </div>
            </div>
        </div>
        <div class="col-lg-6" id="nopad">
            <div class="col-sm-6">
              <div class="panel panel-primary">
                  <div class="panel-heading text-center"><h1 id="dashheader">Senate links</h1></div>
                  <div class="panel-body dashpanel text-center">
                    <a href="https://docs.google.com/a/baxter-academy.org/forms/viewform?hl=en&id=1Zsbv9kRbJj1SGy1ekLSsH1XwQw8pXu6ZEE2YFY8T4CY" target="_blank"><button type="button" class="btn btn-info"><h6 style="font-size:1.2em; white-space: normal;">Flex Friday Fundraising Form</h6></button></a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="panel panel-primary">
                  <div class="panel-heading text-center"><h1 id="dashheader">Lunch Form</h1></div>
                  <div class="panel-body dashpanel">
                    <cms:editable name='hello' type='richtext'>
                        <p>Hello</p>
                    </cms:editable>
                  </div>
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
                    maxWidth	: 1280,
                    maxHeight	: 720,
                    fitToView	: false,
                    width		: '80%',
                    height		: '80%',
                    autoSize	: false,
                    closeClick	: false,
                    openEffect	: 'none',
                    closeEffect	: 'none',
                    closeBtn    : true
                });
            });
        </script>
      
</body>
</html>
<?php COUCH::invoke(); ?>