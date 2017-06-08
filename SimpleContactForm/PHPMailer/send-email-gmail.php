<?php
require 'class.phpmailer.php';
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->Port = 465;
$mail->Host = 'smtp.gmail.com';
$mail->IsHTML(true);
$mail->Mailer = 'smtp';
$mail->SMTPSecure = 'ssl';

$mail->SMTPAuth = true;
$mail->Username = "Enter your Gmail E-Mail Address";
$mail->Password = "Enter your Gmail E-Mail Password";
