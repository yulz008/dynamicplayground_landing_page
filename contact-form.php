<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Thank You!</title>
</head>
<body style="text-align: center;padding:20px 0;">
	<?php

		$name = $_POST['contactName'];
		$email = $_POST['contactEmail'];
		$phone = $_POST['contactPhone'];
		$website = $_POST['contactWebsite'];
		$message = $_POST['contactMessage'];
		
		$formcontent=" From: Gimri Contact Form $email \n
		Name: $name \n
		Email Address: $email \n
		Phone Number: $phone \n
		Website: $website \n
		Message: $message";
		
		$recipient = "help.webpuls@gmail.com";
		$subject = "Contact With Gimri Admin";
		$mailheader = "From: $email \r\n";
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
		
	?>
	
	
</body>
</html>