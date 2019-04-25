<?php	
	use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

	function sendOTP($email,$otp) {
	
// Load Composer's autoloader
//require("D:\xampp\htdocs\class.phpmailer.php");
require 'D:\xampp\php\pear\PHPMailer\src\Exception.php';
require 'D:\xampp\php\pear\PHPMailer\src\PHPMailer.php';
require 'D:\xampp\php\pear\PHPMailer\src\SMTP.php';

	
		$message_body = "One Time Password for login authentication is:<br/><br/>" . $otp;
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
);  
 //Recipients
    $mail->setFrom('buvimasi98@gmail.com', 'Mailer');    //receiver mail id
    $mail->addAddress($email, 'name');     // sender mail id
		
    // Attachments
    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'OTP to login';
    $mail->Body    = ($message_body);
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
     $result = $mail->Send();
    if($mail->send()){
    echo 'OTP has been sent';}
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
return $result;
	} 
?>   