<?php

if (isset($_POST['submit'])) {
	$name = $_POST['name'];
	$subject = $_POST['phone'];
	$mailfrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "ranran250880@gmail.com";
	$header = "From: " . $emailfrom;
	$txt = "You have received an e-mail from " . $name . ".\n\n" . $message;

	mail($mailTo, $subject, $txt, $header);
	header("location: index.html?mailsend");
}
