<?php
/*
   Example PHP Mailer Script

*/

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);                            
//Server settings
$mail->isSMTP();
$mail->SMTPSecure = 'tls';                                       
$mail->Host = 'smtp.gmail.com';                      
$mail->SMTPAuth = true;                             
$mail->Username = 'yourgmailaccount@gmail.com';     
$mail->Password = 'password';             

$mail->SMTPOptions = array(
    'ssl' => array(
    'verify_peer' => false,
    'verify_peer_name' => false,
    'allow_self_signed' => true
     )
   );                         

$mail->Port = 587;                                   

//Send Email
$mail->setFrom('yourgmailaccount@gmail.com');
        
//Recipients
$mail->addAddress($email);              
$mail->addReplyTo('yourgmailaccount@gmail.com');
        
//Content
$mail->isHTML(true);                                  
$mail->Subject = $subject;
$mail->Body    = $message;
$mail->send();


?>