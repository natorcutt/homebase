<html> 
<head> <title> Contact Me - Natalie's Portfolio </title>
<link type="text/css" rel="stylesheet" href="stylesheet.css" />
<link href='http://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css' />
</head> 

<body> 
<header> <img src="header1.png" alt="header"/></header>

<nav> 
			<ul> 
			<li> <a href="index.html"> Home </a> </li>
			<li> <a href="writing.html"> Writing </a></li>
			<li> <a href="design.html"> Design </a> </li> 
			<li> <a href="uxprojects.html"> UX Projects </a> </li> 
			<li> <a href="resume.html"> Resume </a> </li>
			<li> <a href="contact.html"> Contact </a> </li> 
			</ul> 
		</nav> 
<div class="container"> 

<form action="mail.php" method="POST">
<p> Name </p> <input type="text" name="name">
<p> Email </p> <input type="text" name="email">
<p> Message </p> <textarea name="message" rows="6" cols="25"></textarea><br />
<input type="submit" value="Send"><input type="reset" value="Clear">
</form>

<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "emailaddress@here.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?> 









</div> 
<footer></footer>


</body> 
</html> 