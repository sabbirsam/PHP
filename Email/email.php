<?php

include_once "function.php";


 /**
  * EMail with Attachment by using a Library   
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