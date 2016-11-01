<?php
	// $accao=$_GET["accao"];
	// if($accao=='enviar'){
	// 	$msg = "Testando envio de email\nIsis Arte";

	// 	// use wordwrap() if lines are longer than 70 characters
	// 	$msg = wordwrap($msg,70);
	// 	$to = "claucioentreter@gmail.com";
	// 	$subject = "Férias Please";
	// 	// Always set content-type when sending HTML email
	// 	// z
	// 	// More headers
	// 	$headers .= 'From: <clauciozitha@gmail.com>' . "\r\n";
	// 	$headers .= 'Cc: <amysupeta@gmail.com> ' . "\r\n";

	// 	mail($to,$subject,$msg,$headers);
	// 	echo "Pssei";
	
	// }

?>

<?php
include "../../lib/PHPMailer_5.2.4/class.phpmailer.php"; // include the class name
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "clauciozitha@gmail.com";
$mail->Password = "clauciozithayrd";
$mail->SetFrom("claucioentreter@gmail.com");
$mail->Subject = "Here is the subject";
$mail->Body = "This is the HTML message body <b>in bold!</b>";
 if(!$mail->Send()){
    echo "Mailer Error: " . $mail->ErrorInfo;
}
else{
    echo "Message has been sent";
}
?>