<?php
/*require 'PHPMailerAutoload.php';

$mail = new PHPMailer;

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'email-smtp.us-east-1.amazonaws.com';  // Specify main and backup server
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'AKIAIHZPVJKFFRS3DVZQ';                            // SMTP username
$mail->Password = 'AvGezXL+DunKhrQnv5DBXQPCH9GNTxyrwp5/PKcIK82q';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted
$mail->Port = 587;

$mail->From = 'centraldeadoradores@centraldeadoradores.com.br';
$mail->FromName = 'Central de Adoradores';
$mail->addAddress('filipe@primeiroestilo.com.br', 'Filipe');  // Add a recipient

$mail->WordWrap = 50;                                 // Set word wrap to 50 characters
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
   echo 'Message could not be sent.<br>';
   echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo 'Message has been sent';*/

require '../../cronjob/Mail.php';