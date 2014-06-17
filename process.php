<?php
	$recipient = "kimispencer@gmail.com";
	$sender = $recipient;
	$subject = "Subscribe";
	$email = $_POST['email'];
	$body = "Email: " . $_POST['email'] . " \n";

	echo $email

	mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");
?>