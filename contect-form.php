<?php
    $name= $_post['name'];
	$visitor_email = $_post['email'];
	$message = $_post['message'];
	
	
	$email_from = 'joshidipanshu2005@gmail.com';
	
	$email_subject = 'new form submission';
	
	$email_body = "User Name: $name.\n".
	"User Email: $visitor_email.\n".
	"User Phone: $phone number.\n".
	"User Message: $message.\n";
	
	$to = "joshidipanshu203@gmail.com";
	
	$headers = "From: $email_from \r\n";
	
	$headers = "Reply-To: $visitor_email \r\n";
	
	mail($to,$email_subject,$email_body,$headers);
	
	header("Location: index.html");
?>