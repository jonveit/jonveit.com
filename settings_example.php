<?php

require './scripts/PHPMailerAutoload.php';

$mail = new PHPMailer;

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = '';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = '';                 // SMTP username
$mail->Password = '';	// SMTP password
$mail->SMTPSecure = '';	// Enable TLS encryption, `ssl` also accepted
$mail->Port = ;	// TCP port to connect to

?>


