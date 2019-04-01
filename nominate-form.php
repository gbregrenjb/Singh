<?php
	$name = $_Post['name'];
	$message = $_Post['message'];


	$email_form =  'gurjot.singh.aulakh28@gmail.com';

	$email_subject = "New Form Submission";

	$email_body = "User Name: $name.\n".
						"User Message: $message.\n";



	$to = "gurjot.singh.aulakh28@gmail.com";

	$headers = "Form: $email_form \r\n";

	mail($to,$email_subject,$email_body,$headers);

	header("Location: index.html");

?>