<?php
$to = "prateekkaushaliitkgp@gmail.com";
$subject = "HTML email";

$message = "
This message was sent to you to check if the mail could be sent via free hosting site by Prateek Kaushal.
";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <prateekkaushaliitkgp@gmail.com>' ;//. "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

if(mail($to,$subject,$message,$headers))
	echo "sent";
else
	echo "not sent";
?>