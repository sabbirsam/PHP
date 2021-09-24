<?php

include_once "function.php";


 /**
  * EMail 
 */

$to = "msa.sabbir.ahmed.official@gmail.com";
$From = "sam@gmail.com";
$subject = "Simple demo Letter";
$body = "Hello \n Its a new";
$headers = "From: {$From}" . "\r\n" .
"CC: techsambd@gmail.com";

echo mail($to,$subject,$body,$headers);




$to = "msa.sabbir.ahmed.official@gmail.com";
$From = "sam@gmail.com";
$subject = "Simple demo Letter";
$body = "Hello \n Its a new mail";
$headers = "From: {$From}" . "\r\n";
$headers.="CC: samiubat14@gmail.com";


echo mail($to,$subject,$body,$headers);



 /**
  * EMail with HTML 
 */

$to = "msa.sabbir.ahmed.official@gmail.com";
$From = "Sabbir Sam <samiubat14@gmail.com>";
$cc= "samiubat14@gmail.com";
$subject = "আমরা এখন একটি বাংলা টেস্ট করতেছি";
$body = "<strong>Hello</strong><br>তো দেখা যাচ্ছে যে এটি ভালোই কাজ করছে<br>";
$body .= "<img src='https://images.unsplash.com/photo-1593642532842-98d0fd5ebc1a?ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80'>";


$headers = "MIME-Version: 1.0 \r\n";
$headers .= "Content-type:text/html; charset=UTF-8 \r\n";
$headers .= "From: {$From}" . "\r\n";
$headers.="CC: {$cc}";


echo mail($to,$subject,$body,$headers);



 /**
  * EMail with Attachment by using a Library  --------------------------------=================  
 */

require_once("./Email/PHPMailer/PHPMailer.php");
require_once("./Email/PHPMailer/Exception.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);


try{
    $pm->setFrom("sam@gmail.com");
    $pm->addAddress("msa.sabbir.ahmed.official@gmail.com");
    $pm->Subject = ("Here is the subject Part OKKKK");
    $pm->Body = ("Hi, There Its a <strong>demo mail another</strong> from PHP");
    $pm->AltBody = ("Hi, There Its a <strong>ALT body- > demo mail</strong> from PHP");
    $pm->isHTML(true); //send it as a HTML

    $pm->addAttachment("C:\Users\sabbir\Desktop\Php\Email\code.txt"); //use to add attatchment use PWD to get the directory 

    $pm->send();//cann to send 



   echo "Mail was send successfully..";
}
catch(Exception $e){
    echo "Failed to send mail".$pm->ErrorInfo;
}





 /**
  * EMail with Attachment by using a Library  this is the final one   
 */

require_once("./Email/PHPMailer/PHPMailer.php");
require_once("./Email/PHPMailer/Exception.php");
require_once("./Email/PHPMailer/SMTP.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$pm = new PHPMailer(true);


try {
   //Server settings
  $pm->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
   $pm->isSMTP();                                            //Send using SMTP
   $pm->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
   $pm->SMTPAuth   = true;                                   //Enable SMTP authentication
   $pm->Username   = 'techsambd@gmail.com';                     //SMTP username
   $pm->Password   = 'S@bbir14697@tech';                               //SMTP password
   $pm->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
   $pm->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

   //Recipients
   $pm->setFrom('techsambd@gmail.com', 'Sabbir Mailer');
   $pm->addAddress('msa.sabbir.ahmed.official@gmail.com', 'Sabbir User');     //Add a recipient
   $pm->addAddress('samiubat14@gmail.com');               //Name is optional
   $pm->addReplyTo('samiubat14@gmail.com', 'Information');
   $pm->addCC('samiubat14@gmail.com');
   $pm->addBCC('samiubat14@gmail.com');

   //Attachments
   $pm->addAttachment('C:\Users\sabbir\Desktop\Php\Email\code.txt', 'new name.txt');         //Add attachments

   //Content
   $pm->isHTML(true);                                  //Set email format to HTML
   $pm->Subject = 'Here is the subject';
   $pm->Body    = 'This is the HTML message body <b>in bold!</b>';
   $pm->AltBody = 'This is the body in plain text for non-HTML mail clients';

   $pm->send();

   echo 'Message has been sent';
} catch (Exception $e) {
   echo "Message could not be sent. Mailer Error: {$pm->ErrorInfo}";
}