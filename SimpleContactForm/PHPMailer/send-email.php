<?php
require 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Mailer = 'smtp';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->Host = "smtp.gmail.com";
$mail->IsHTML(true);


$mail->SMTPAuth = true;
$mail->Username = "Enter your E-Mail Address";
$mail->Password = "Enter your Password";

//Sender Info (commented out because defined in contact-form.php)
//$mail->From = "no-reply@ictdesignhub.com";
//$mail->FromName = "User Authentication";
