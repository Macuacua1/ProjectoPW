<?php
require_once("phpmailer/class.phpmailer.php");

$mail=new PHPMailer();

$mail->IsSMTP();                   //Important b'coz by this stmt we sent mail using smtp
$mail->SMTPAuth = true;       // enable SMTP authentication
$mail->SMTPSecure = "ssl";  // sets the prefix to the servier
$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
$mail->Port = 465; // set the SMTP port for the GMAIL server
$mail->Username = "claucioentreter@gmail.com"; // GMAIL username
$mail->Password = "13051994"; // GMAIL password

$mail->FromName = "Claucio Zitha";
$mail->From = "claucioentreter@gmail.com";
$mail->AddAddress("clauciozitha@gmail.com","Claucio Zitha");
$mail->Subject = "Assunto";

$mail->Body ="body of the message";
$result=$mail->Send();
    return $result;

?>