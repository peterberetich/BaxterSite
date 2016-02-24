<?php
	if (isset($_POST["submit"])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		$human = intval($_POST['human']);
		$from = 'Demo Contact Form'; 
		$to = 'peter.beretich@baxter-academy.org'; 
		$subject = 'Message from Contact Demo ';
		
		$body ="From: $name\n E-Mail: $email\n Message:\n $message";
		// Check if name has been entered
		if (!$_POST['name']) {
			$errName = 'Please enter your name';
		}
		
		// Check if email has been entered and is valid
		if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
			$errEmail = 'Please enter a valid email address';
		}
		
		//Check if message has been entered
		if (!$_POST['message']) {
			$errMessage = 'Please enter your message';
		}
		//Check if simple anti-bot test is correct
		if ($human !== 5) {
			$errHuman = 'Your anti-spam is incorrect';
		}
// If there are no errors, send the email
if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
	}
}
	}
?>

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
    <div class="col-lg-5">
  	<div class="container">
  		<div class="row">
  			<div class="col-lg-6">
  				<h4 class="page-header text-justified">Email addresses for staff members can be found on either the <a href="faculty.html">Faculty</a> or Administration page.   General inquiries can be made below, and we'll direct it to the right person.  Thank you!</h4>
				<form class="form-horizontal" role="form" method="post" action="contact.php">
					<div class="form-group">
						<label for="name" class="col-sm-2 control-label">Name</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
							<?php echo "<p class='text-danger'>$errName</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="email" class="col-sm-2 control-label">Email</label>
						<div class="col-sm-10">
							<input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
							<?php echo "<p class='text-danger'>$errEmail</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="message" class="col-sm-2 control-label">Message</label>
						<div class="col-sm-10">
							<textarea class="form-control" rows="4" name="message"><?php echo htmlspecialchars($_POST['message']);?></textarea>
							<?php echo "<p class='text-danger'>$errMessage</p>";?>
						</div>
					</div>
					<div class="form-group">
						<label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
							<?php echo "<p class='text-danger'>$errHuman</p>";?>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<input id="submit" name="submit" type="submit" value="Send" class="btn btn-primary">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-10 col-sm-offset-2">
							<?php echo $result; ?>	
						</div>
					</div>
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
	</div>
    
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
  </body>
</html>