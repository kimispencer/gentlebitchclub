<?php
	// $recipient = "kimispencer@gmail.com";
	// $sender = $recipient;
	// $subject = "Subscribe";
	// $email = $_POST['email'];

	// mail( $recipient, $subject, $email, "From: $sender" ) or die ("Mail could not be sent.");

	// $file = 'form.txt';

	$postdata = file_get_contents("php://input");
	$data = json_decode($postdata, true);

	$recipient = "kimispencer@gmail.com";
	$sender = $recipient;
	$subject = "Subscribe";
	$email = $data['email'];

	mail( $recipient, $subject, $email, "From: $sender" ) or die ("Mail could not be sent.");

	// $data_insert = "Name: " . $data['email'] .
	        // ", Email: " . $data['emailaddress'] . 
	        // ", Description: " . $data['textareacontent'] . 
	        // ", Gender: " . $data['gender'] . 
	        // ", Is a member: " . $data['member'];


	//print $data_insert;

	// file_put_contents($file, $data_insert, FILE_APPEND | LOCK_EX);
?>


