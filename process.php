<?php
	$recipient = "kimispencer@gmail.com";
	$sender = $recipient;
	$subject = "Subscribe";
	$body .= "Email: ".$_POST['email']." \n";

	mail( $recipient, $subject, $body, "From: $sender" ) or die ("Mail could not be sent.");
?>