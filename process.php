<?php
	$recipient = "kimispencer@gmail.com";
	$sender = $recipient;
	$subject = "Subscribe";
	$email = $_POST['email'];

	echo $_POST['email'];
	echo "testing, " . $email;

	mail( $recipient, $subject, $email, "From: $sender" ) or die ("Mail could not be sent.");
?>