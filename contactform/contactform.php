<?php
	$Name = $_POST['name'];
	$Email = $_POST['email'];
	$Subject = $_POST['subject'];
	$Message = $_POST['message'];
	
	if (empty($Name) || empty($Email) || empty($Subject)) {
		$from_email = "sarathchandar1994@gmail.com";
		$to_email = $Email;
		$timestamp_server = date("D M j,Y H:i:s T",time());
		$subject = $Subject;
		$mailbody = $_POST['message'] . "<br />" . $timestamp_server;
		$headers = 'Content-type: text/plain; charset=\"iso-8859-1\"' . " ";
		$headers .= 'From: ' . $from_email . "";
		$headers .= 'Cc: ' . $from_email . "";
		$headers .= 'Reply-To: ' . $from_email . "";
		$headers .= 'Return-Path: ' . $from_email . "";
		$headers .= 'X-Mailer: PHP/' . phpversion() . "";
		$headers .= 'MIME-Version: 1.0' . "";
		if(mail($to_email, $subject, $mailbody, $headers))
		{
			echo "OK"
		}
		else
		{
			echo "ERROR sending Email PHP mail() returned FALSE<br>";
		}
		//echo 'Server date and time ' . $timestamp_server . "<br>";
	}
	exit();
?>