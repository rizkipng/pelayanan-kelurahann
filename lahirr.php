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
$nama=$_POST['name'];
$TL=$_POST['tanggal'];


$SRT=$_FILES['SRT']['name']; 
$SRT_tmp_name=$_FILES['SRT']['tmp_name'];
$SRW=$_FILES['SRW']['name']; 
$SRW_tmp_name=$_FILES['SRW']['tmp_name'];

$SMI=$_FILES['SMI']['name']; 
$SMI_tmp_name=$_FILES['SMI']['tmp_name'];
$istri=$_FILES['istri']['name']; 
$istri_tmp_name=$_FILES['istri']['tmp_name'];
$KK=$_FILES['KK']['name']; 
$KK_tmp_name=$_FILES['KK']['tmp_name'];
$SN=$_FILES['SN']['name']; 
$SN_tmp_name=$_FILES['SN']['tmp_name'];
$SKL=$_FILES['SKL']['name']; 
$SKL_tmp_name=$_FILES['SKL']['tmp_name'];


try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'wahyonoasukirik@gmail.com';                     // SMTP username
    $mail->Password   = 'lqbyndaqabhszsfr';                               // SMTP password
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
    $mail->addAttachment($SMI_tmp_name, $SMI);    // Optional name
    $mail->addAttachment($istri_tmp_name, $istri);    // Optional name
    $mail->addAttachment($KK_tmp_name, $KK);    // Optional name
    $mail->addAttachment($SN_tmp_name, $SN);    // Optional name
    $mail->addAttachment($SKL_tmp_name, $SKL);    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Surat kematian';
    $mail->Body  ="<b>Email Pengirim : </b>$email_p<br>"; 
    $mail->Body  .="<b>Nama Anak Pengirim : </b>$nama<br>"; 
    $mail->Body  .="<b>Tanggal lahir Anak Pengirim : </b>$TL<br>"; 


    $mail->send();
    echo 'Pesan berhasil dikirim Pastikan lampirkan dokumen dengan benar';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

mysqli_query ($conn, "INSERT INTO `user_kl`(`email`, `name`, `tanggal`, `SRT`, `SRW`, `SMI`, `istri`, `KK`, `SN`, `SKL`) VALUES "
      . "('$email_p','$nama','$TL;','$SRT','$SRW','$SMI','$istri','$KK','$SN','$SKL')");