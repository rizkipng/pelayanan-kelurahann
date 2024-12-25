<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
include 'db.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
// Load Composer's autoloader
require 'C:\xampp\htdocs\TA\vendor\autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);
$name=$_POST['name'];
$subject=$_POST['subject'];
$email_p=$_POST['email'];
$Pesan=$_POST['pesan'];



try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'wahyonoasukirik@gmail.com';                     // SMTP username
    $mail->Password   = 'iucqlyvhpsumpzpb';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to
    $mail->Mailer = "smtp"; 
    $mail->Sender =($email_p);

    //Recipients
    $mail->setFrom($email_p);
$mail->AddReplyTo($email_p); // menunjukkan header ReplyTo

    
    $mail->addAddress('wahyonoasukirik@gmail.com');     // Add a recipient

    // Attachments
    

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body  ="<b>Email Pengirim : </b>$name<br>"; 
    $mail->Body  .="<b>Email Pengirim : </b>$email_p<br>"; 
    $mail->Body  .="<b>Email Pengirim : </b>$Pesan<br>"; 

    $mail->send();
    echo "Pesan berhasil $name, Terima Kasih Telah Menghubungi Kami";

} catch (Exception $e) {
    echo "Pesan tidak Terkirim. Mailer Error: {$mail->ErrorInfo}";
}

