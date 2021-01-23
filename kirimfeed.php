<?php

include 'emailconfig.php';




$email=$_GET['email'];



$mail->setFrom('info.goxesports@gmail.com', 'Gox Esports');
$mail->addReplyTo('info.goxesports@gmail.com', 'Gox Esports');

// Menambahkan penerima
$mail->addAddress($email);

// Menambahkan cc atau bcc 
$mail->addCC('');
$mail->addBCC('');

// Subjek email
$mail->Subject = 'Pesan Otomatis Gox Esports';

// Mengatur format email ke HTML
$mail->isHTML(true);

// Konten/isi email
$mailContent = "

    <p> 
Terima Kasih gaes sudah mengirim pesan :D
    </p>";
	
$mail->Body = $mailContent;

// Kirim email
if(!$mail->send()){
  
	header("location:features-contact-us.php?pesan=gagalmengirimfeed");
}else{
	
	
   header("location:features-contact-us.php?pesan=sukses");
}
?>