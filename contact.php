<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Bootstrap contact form with PHP example by BootstrapBay.com.">
    <meta name="author" content="BootstrapBay.com">
    <title>Contact - Baxter Academy</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  </head>
  <body>
<!--BEGIN NAV-->
<nav class="navbar navbar-default">
  <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#defaultNavbar1"><span class="sr-only">Toggle navigation</span><span class="icon-bar">      </span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      <a href="welcome.html"><img src="images/Baxlogo.png" class="img-responsive" height="auto" width="140px" alt="Baxter Academy Logo"></a></div>
      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="defaultNavbar1">
        <ul class="nav navbar-nav">
          <!-- About dropdown-->
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">About<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="about.php">Home</a></li>
              <li class="divider"></li>
              <li><a href="history.html">History</a></li>
              <li><a href="mission.html">Mission</a></li>
              <li><a href="vision.html">Our Vision</a></li>
              <li class="divider"></li>
              <li><a href="faculty.html">Faculty and Staff</a></li>
              <li><a href="admin.html">Administration</a></li>
              <li><a href="board.html">Board</a></li>
              <li class="divider"></li>
              <li><a href="boardminutes.html">Board Minutes</a></li>
              <li class="divider"></li>
              <li><a href="formpolicycal.html">Forms and Policies</a></li>
            </ul>
          </li>
          <!-- Baxter Experience dropdown-->
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Baxter Experience<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
            <li><a href="#">FAQs</a></li>
            <li><a href="#">Flex Friday</a></li>
            <li><a href="#">Baxtitution and Baxpectations</a></li>
                <li><a href="#">Open Campus</a></li>
                <li><a href="#">Student Handbook</a></li>
            </ul>
          </li>
          <!-- Admissions dropdown-->
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Admissions<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
          <li><a href="#">How to Apply</a></li>
                <li><a href="#">Open Houses</a></li>
          <li><a href="#">Forms</a></li>
          <li class="divider"></li>
                <li><a href="#"><button type="button" class="btn btn-blue">Apply Now!</button></a></li>
            </ul>
            </li>
          <!-- Academics dropdown-->
            <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Academics<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                  <li><a href="#">Overview</a></li>
                  <li><a href="#">Programs of Study</a></li>
                  <li class="divider"></li>
                  <li><a href="#">Summer Programs</a></li>
              </ul>
            </li>
          <!-- Gallery-->
          <li><a href="#">Gallery</a></li>
          <!-- Contact + Support dropdown-->
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Contact and Support<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="#">Become a Baxter Partner</a></li>
                <li><a href="#">Fund a Project</a></li>
                <li><a href="#">Partnerships</a></li>
                <li><a href="#">Pitch a Project</a></li>
                <li><a href="#">Wishlist</a></li>
                <li class="divider"></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Employment Opportunities</a></li>
                <li class="divider"></li>
                <li><a href="#"><button type="button" class="btn btn-success">Give to Baxter</button></a></li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <!-- Website login dropdown-->
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dashboards<span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="login.html">Students</a></li>
              <li><a href="login.html">Parents</a></li>
              <li><a href="login.html">Faculty</a></li>
              <li><a href="prospectivedash.php">Prospective</a></li>

            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-right" role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Go</button>
        </form>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!--End of Navbar-->
    <h1 class="page-header text-center"><u>Contact Us</u></h1>
  		<div class="row">
  			<div class="col-lg-6">
  				<h4 class="page-header text-justified">Email addresses for staff members can be found on either the <a href="faculty.html">Faculty</a> or Administration page.   General inquiries can be made below, and we'll direct it to the right person.  Thank you!</h4>
                <script language="javascript">var sa_email_id = '70545-88443';var sa_sent_text = 'Thank you for contacting us. We will get back to you soon!';</script>
                    <form name="htmlform" method="post" action="html_form_send.php">
                      <label for="first_name">First Name *</label>
                      <input class="form-control"  type="text" name="first_name">
                      <label for="last_name">Last Name *</label>
                      <input class="form-control" type="text" name="last_name">
                      <label for="email">Email Address *</label>
                      <input class="form-control" type="text" name="email">
                      <label for="telephone">Phone Number</label>
                      <input class="form-control" type="text" name="telephone">
                      <label for="comments">Comments *</label>
                      <textarea class="form-control" name="comments" maxlength="1000" cols="25" rows="6"></textarea>
                      <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
                    </form>
			</div>
            
    		<div class="col-lg-6">
    			<h3><b>Physical and Mailing Address:</b> 
					<br/>
					Baxter Academy
					<br/>
					54 York Street, Portland, ME 04101
					<br/><br/>
					<b>T :</b> 1.207.699.5500
					<br/>
					<b>F :</b> 1.207.331.4831 </h3>
    		</div>
		</div>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>