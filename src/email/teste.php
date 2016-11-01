<?php
require_once("phpmailer/class.phpmailer.php");

smtpmailer('claucioentreter@gmail.com','clauciozitha@gmail.com','KB','testando','okaaaaaay');

function smtpmailer($to, $from, $from_name, $subject, $body) { 
	global $error;
	$mail = new PHPMailer();  // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true;  // authentication enabled
	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 587; //or 465
	$mail->IsHTML(true);
	$mail->Username = 'clauciozitha@gmail.com';  
	$mail->Password = 'clauciozithayrd';  

	$mail->SetFrom($from, $from_name);
	$mail->Subject = $subject;
	$mail->Body = $body;
	$mail->AddAddress($to);
	if(!$mail->Send()) {
		$error = 'Mail error: '.$mail->ErrorInfo; 
		echo "erro".$error;
		return false;
	} else {
		$error = 'Message sent!';
		echo "string".$error;
		return true; 
	}
}

?>