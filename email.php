<?php

require './scripts/PHPMailerAutoload.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$message .= "\n\nSent Through JonVeit.com";

$mail = new PHPMailer;

// $mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.mandrillapp.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'jonathan.veit@gmail.com';                 // SMTP username
$mail->Password = 'Rpe9t-oiBPTbv7JA6fLBIg';	// SMTP password
$mail->SMTPSecure = 'tls';	// Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;	// TCP port to connect to

$mail->From = $email;
$mail->FromName = $name;
$mail->addAddress('jonathan.veit@gmail.com');   

$mail->Subject = $subject;
$mail->Body    = $message;


if(!$mail->send()) {
    $output = 'Message could not be sent. ';
    $output .= 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    $output = 'Message has been sent';
}

echo $output;

?>


