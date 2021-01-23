<?php

require 'phpmailer/PHPMailerAutoload.php';
$mail = new phpmailer;

// Konfigurasi SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->Username = 'info.goxesports@gmail.com';
$mail->Password = 'rebecca2307';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

?>