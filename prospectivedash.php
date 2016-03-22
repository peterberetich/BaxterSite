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
    
        <title>Prospective Family Dashboard</title>
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
    <h2 class="fullwidthdashboard">Prospective Dashboard</h2>
</section>
<div class="centerednav">
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
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
                  <div class="panel-heading text-center"><h1 id="dashheader">Checklist</h1></div>
                  <div class="panel-body dashpanel scroll-y">
                    <form action="">
                        <div class="checkbox">
                            <label><input type="checkbox" name="optionsCheckboxList[]" value="1"><b>Step 1:</b> Complete Online Information form.</label>
                        </div>
                        <div class="checkbox">
                            <label><input type="checkbox" name="optionsCheckboxList[]" value="2"><b>Step 2:</b> Complete Letter of Intent </label>
                        </div> 
                        <div class="checkbox">
                          <label><input type="checkbox" name="optionsCheckboxList[]" value="3"><b>Step 3:</b> Wait to be notified whether you have the right to enroll (may be determined by lottery). </label>
                        </div> 
                        <div class="checkbox">
                          <label><input type="checkbox" name="optionsCheckboxList[]" value="4"><b>Step 4:</b> After being notified, file the committment to enroll within 14 days. </label>
                        </div>
                        <br>
                        <div style="position:absolute; bottom:30px">
                        <button class="btn btn-primary save" type="submit">Save</button>
                        <button class="btn btn-primary restore" type="submit">Restore</button>
                        </div>
                    </form>
                  </div>
                </div>
              
        </div>
    <div class="col-lg-1"></div>
</div>
</div>
<div class="row">
    <div class="col-lg-1"></div>
    <div class="col-lg-10">
        <div class="col-lg-6">
              <div class="panel panel-primary">
                  <div class="panel-heading text-center"><h1 id="dashheader">Enroll</h1></div>
                  <div class="panel-body dashpanel scroll-y">
                    <cms:editable name='enrollmentforms' type='richtext'>
                        <p>Hello</p>
                    </cms:editable>
                  </div>
                </div>
            </div>
        <div class="col-lg-6">
              <div class="panel panel-primary">
                  <div class="panel-heading text-center"><h1 id="dashheader">Open House</h1></div>
                  <div class="panel-body dashpanel scroll-y">
                    <cms:editable name='openhouse' type='richtext'>
                        <p>Hello</p>
                    </cms:editable>
                  </div>
                </div>
        </div>
    <div class="col-lg-1"></div>
</div>
</div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
  <script src="js/jquery-1.11.2.min.js"></script>
  <script src="js/webforms.save-restore.js"></script>
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
        <script>
        $(function() {
            $("form")
            .on("click", ".save", webforms.save) // save
            .on("click", ".restore", webforms.restore) // restore
        });
    </script>
</body>
</html>
<?php COUCH::invoke(); ?>