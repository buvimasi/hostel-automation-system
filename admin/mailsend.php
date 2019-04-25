<?php 

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
//require("D:\xampp\htdocs\class.phpmailer.php");
require 'D:\xampp\php\pear\PHPMailer\src\Exception.php';
require 'D:\xampp\php\pear\PHPMailer\src\PHPMailer.php';
require 'D:\xampp\php\pear\PHPMailer\src\SMTP.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'buvimasi98@gmail.com';                     // SMTP username
    $mail->Password   = 'kanagaraj15';                               // SMTP password
    $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;  
    $mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);                                  // TCP port to connect to

    //Recipients
    $mail->setFrom('buvimasi98@gmail.com', 'GctHostel');    //receiver mail id
   $mail->addAddress('dharu1105@gmail.com', 'name');  
 $mail->addAddress('kaviyaapalaniappan@gmail.com', 'name'); 
  $mail->addAddress('buvaneshwarimasilamani8@gmail.com', 'name');     // sender mail id

    // Attachments
    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Leave Approval Mail';
    $mail->Body    = 'This is Leave<b> Approval Notification</b><br>';
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
$mail->AddAttachment('Doc.pdf');

    if($mail->send()){
    echo 'Message has been sent';}
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} ?>