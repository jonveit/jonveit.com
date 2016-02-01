<?php

require './settings.php'; // Provides $mail PHPMailer

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
$message .= "\n\nSent Through JonVeit.com";

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


