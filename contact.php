<?php
define("EMAIL", "louie.dugaduga@icloud.com");
 
if(isset($_POST['submit'])) {
   
  include('validate.class.php');
   
  //assign post data to variables 
  	$name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);
 
  //start validating our form
  $v = new validate();
  $v->validateStr($name, "name", 3, 75);
  $v->validateEmail($email, "email");
  $v->validateStr($message, "message", 5, 1000);  
 
  if(!$v->hasErrors()) {
        $header = "From: $email\n" . "Reply-To: $email\n";
        $subject = "Contact Form from louiedugaduga.com";
        $email_to = EMAIL;
         
        $emailMessage = "Name: " . $name . "\n";    
        $emailMessage .= "Email: " . $email . "\n\n";
        $emailMessage .= $message;
         
    //use php's mail function to send the email
        @mail($email_to, $subject ,$emailMessage ,$header );  
         
    //grab the current url, append ?sent=yes to it and then redirect to that url
        $url = "http". ((!empty($_SERVER['HTTPS'])) ? "s" : "") . "://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
        header('Location: '.$url."?sent=yes");
 
    } else {
    //set the number of errors message
    $message_text = $v->errorNumMessage();       
 
    //store the errors list in a variable
    $errors = $v->displayErrors();
     
    //get the individual error messages
    $nameErr = $v->getError("name");
    $emailErr = $v->getError("email");
    $messageErr = $v->getError("message");
  }//end error check
}// end isset
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="style.css" rel="stylesheet">
	<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Sanchez' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div class="container">
		<div class="header">
			<div class="circle">
				<h1>L</h1>
			</div>
			<h2 style="margin-bottom:0">Louie Dugaduga</h2>
			<p><em>Front End Developer & Wordpress Guru</em></p>
			<navigation class="mynav">
				<li><a href="index.html">Home</a></li> 
				<li><a href="portfolio.html">Portfolio</a></li> 
				<li><a href="contact.php">Contact</a></li>
			</navigation>
			<div class="clearfix"></div>
		</div>
		<!-- header -->
	
		<div class="mythreethumb contact">
			<div class="row-fluid">
				<div class="span6">
					<h3>Send me an email</h3>
					
					<?php echo $errors; ?>
					<?php if(isset($_GET['sent'])): ?><p class="alert alert-success">Your message has been sent. Thank You Very Much</p><?php endif; ?>
					<form method="post" action".">
						<label>Name <span class="alert alert-error fade in"><?php echo $nameErr; ?></span></label>
						<p><input name="name" type="text" value="<?php echo htmlentities($name); ?>"></p>
						<label>Email <span class="alert alert-error"><?php echo $emailErr ?></span></label>
						<p><input name="email" type="text" value="<?php echo htmlentities($email); ?>"></p>
						<label>Message <span class="alert alert-error"><?php echo $messageErr ?></span></label>
						<p><textarea name="message" style="height:150px;"><?php echo htmlentities($message); ?></textarea><br></p>
						<p><input name="submit" type="submit" value="Send" class="btn"></p>
					</form>
				</div>
				<div class="span6">
					<h3>&nbsp;</h3>
					
					
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<!-- /mythreethumb -->
		<div class="myfooter">
			<div class="row-fluid">
				<div class="span4" style="margin-left:0">
					<hr>
					<h4>About Me</h4>
					<p>Well I have been in this industry for about 5 years and im happy to help clients building their websites.<br>
						Here's a list of what i can offer<br>
						
					</p>
					<ul>
						<li>Responsive Website Design</li>
						<li>PSD to HTML/CSS</li>
						<li>Wordpress Integration and Administration</li>
					</ul>
				</div>
				<div class="span4">
					<hr>
					<h4>What I am Reading</h4>
					<p>I'm having fun of exploring new things specially in new technologies, here's a list of what i am reading.</p>
					<ul>
						<li>Smashing Magazine</li>
						<li>Tutsplus (My Fav)</li>
						<li>A list apart</li>
						<li>Many more...</li>
					</ul>
				</div>
				<div class="span4">
					<hr>
					<h4>Contact</h4>
					<p class="">Feel free to get in touch with me by email: louie.dugaduga@gmail.com<br>
					Or you can find me at these places:</p>
					
					<div class="row-fluid">
						<div class="span5">
							<ul class="social">
								<li>
									<p><a href="#"><img src="img/facebook.png" width="22"> Facebook</a></p>
								</li>
								<li>
									<p><a href="#"><img src="img/twitter.png" width="22"> Twitter</a></p>
								</li>
							</ul>
						</div>
						<div class="span5">
							<ul class="social">
								<li>
									<p><a href="#"><img src="img/flickr.png" width="22"> Flickr</a></p>
								</li>
								<li>
									<p><a href="#"><img src="img/linkedin.png" width="22"> Linkedin</a></p>
								</li>
							</ul>
						</div>
					</div>
					<!-- /row-fluid -->
				</div>
				<!-- /span4 -->
			</div>
		</div>
	</div>
	<!-- end container -->
    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-alert.js"></script>
  </body>
</html>