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
$KTP=$_FILES['KTP']['name']; 
$KTP_tmp_name=$_FILES['KTP']['tmp_name'];

$SPD=$_FILES['SPD']['name']; 
$SPD_tmp_name=$_FILES['SPD']['tmp_name'];
$GBS=$_FILES['GBS']['name']; 
$GBS_tmp_name=$_FILES['GBS']['tmp_name'];
$ST=$_FILES['ST']['name']; 
$ST_tmp_name=$_FILES['ST']['tmp_name'];
$PBB=$_FILES['PBB']['name']; 
$PBB_tmp_name=$_FILES['PBB']['tmp_name'];


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
    $mail->addAttachment($SRT_tmp_name, $SRT);    // Optional name
    $mail->addAttachment($KTP_tmp_name, $KTP);    // Optional name
    $mail->addAttachment($SPD_tmp_name, $SPD);    // Optional name
    $mail->addAttachment($GBS_tmp_name, $GBS);    // Optional name
    $mail->addAttachment($ST_tmp_name, $ST);    // Optional name
    $mail->addAttachment($PBB_tmp_name, $PBB);    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Surat kematian';
    $mail->Body  ="<b>Email Pengirim : </b>$email_p<br>"; 

    $mail->send();
    echo 'Pesan berhasil dikirim Pastikan lampirkan dokumen dengan benar';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

mysqli_query ($conn, "INSERT INTO `user_imb`(`email`, `SRT`, `KTP`, `SPD`, `GBS`, `ST`, `PBB`) VALUES "
      . "('$email_p','$SRT','$KTP','$SPD','$GBS','$ST','$PBB')");
