<?php
// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
include 'db.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'C:\xampp\htdocs\TA\vendor\autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$email_p=$_POST['email'];

$SRT=$_FILES['SRT']['name']; 
$SRT_tmp_name=$_FILES['SRT']['tmp_name'];
$SRT_folder = 'uploaded_img/'.$SRT;
$SRW=$_FILES['SRW']['name']; 
$SRW_tmp_name=$_FILES['SRW']['tmp_name'];

$KK=$_FILES['KK']['name']; 
$KK_tmp_name=$_FILES['KK']['tmp_name'];
$KTP=$_FILES['KTP']['name']; 
$KTP_tmp_name=$_FILES['KTP']['tmp_name'];
$SKK=$_FILES['SKK']['name']; 
$SKK_tmp_name=$_FILES['SKK']['tmp_name'];
$SPA=$_FILES['SPA']['name']; 
$SPA_tmp_name=$_FILES['SPA']['tmp_name'];


try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'wahyonoasukirik@gmail.com';                     // SMTP username
    $mail->Password   = 'ezvkjvkjuheljavi';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to
    $mail->Mailer = "smtp"; 
    $mail->Sender =($email_p);

    //Recipients
    $mail->setFrom($email_p);
$mail->AddReplyTo($email_p); // menunjukkan header ReplyTo

    
    $mail->addAddress('wahyonoasukirik@gmail.com');     // Add a recipient

    // Attachments
    $mail->addAttachment($SRT_tmp_name, $SRT);    // Optional name
    $mail->addAttachment($SRW_tmp_name, $SRW);    // Optional name
    $mail->addAttachment($KK_tmp_name, $KK);    // Optional name
    $mail->addAttachment($KTP_tmp_name, $KTP);    // Optional name
    $mail->addAttachment($SKK_tmp_name, $SKK);    // Optional name
    $mail->addAttachment($SPA_tmp_name, $SPA);    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Surat kematian';
    $mail->Body  ="<b>Email Pengirim : </b>$email_p<br>";

    $mail->send();
    echo 'Pesan berhasil dikirim Pastikan lampirkan dokumen dengan benar';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

mysqli_query ($conn, "INSERT INTO `user_sk`(`email`, `SRT`, `SRW`, `KK`, `KTP`, `SKK`, `SPA`) VALUES "
      . "('$email_p','$SRT','$SRW','$KK','$KTP','$SKK','$SPA')");