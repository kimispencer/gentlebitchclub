<?php
	$postdata = file_get_contents("php://input");
	$data = json_decode($postdata, true);

	$recipient = "info.gbcbrooklyn@gmail.com";
	$sender = $recipient;
	$subject = "Subscribe";
	$email = $data['email'];

	mail( $recipient, $subject, $email, "From: $sender" ) or die ("Mail could not be sent.");
?>


