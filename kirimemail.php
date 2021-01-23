<?php

include 'emailconfig.php';




$email=$_POST['email'];
$nama=$_POST['nama'];
$pesan=$_POST['pesan'];



$mail->setFrom('info.goxesports@gmail.com', 'Gox Esports');
$mail->addReplyTo('info.goxesports@gmail.com', 'Gox Esports');

// Menambahkan penerima
$mail->addAddress('info.goxesports@gmail.com');

// Menambahkan cc atau bcc 
$mail->addCC('');
$mail->addBCC('');

// Subjek email
$mail->Subject = "$nama mengirim pesan dari Website";

// Mengatur format email ke HTML
$mail->isHTML(true);

// Konten/isi email
$mailContent = "

    <p> 
$pesan
    </p>";
	
$mail->Body = $mailContent;

// Kirim email
if(!$mail->send()){
  
	header("location:features-contact-us.php?pesan=gagalmengirimemail");
}else{
	
	
   header("location:kirimfeed.php?email=$email");
}
?>