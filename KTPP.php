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
$email = "email";


$email_p=$_POST['email'];
$name=$_POST['name'];
$usia=$_POST['usia'];
$tempatlahir=$_POST['tml'];
$alamat=$_POST['almt'];
$agama=$_POST['agama'];
$statusperkawinan=$_POST['SK'];
$pekerjaan=$_POST['pkj'];
$kewarganegaraan=$_POST['wn'];

$image=$_FILES['image']['name']; 
$image_tmp_name=$_FILES['image']['tmp_name'];
$SRT=$_FILES['SRT']['name']; 
$SRT_tmp_name=$_FILES['SRT']['tmp_name'];
$SRT_folder = 'uploaded_img/'.$SRT;
$SRW=$_FILES['SRW']['name']; 
$SRW_tmp_name=$_FILES['SRW']['tmp_name'];

$KK=$_FILES['KK']['name']; 
$KK_tmp_name=$_FILES['KK']['tmp_name'];
$akta=$_FILES['akta']['name']; 
$akta_tmp_name=$_FILES['akta']['tmp_name'];
$SN=$_FILES['SN']['name']; 
$SN_tmp_name=$_FILES['SN']['tmp_name'];



try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'wahyonoasukirik@gmail.com';                     // SMTP username
    $mail->Password   = 'bhnathhczihifunu';                               // SMTP password
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
    $mail->addAttachment($akta_tmp_name, $akta);    // Optional name
    $mail->addAttachment($SN_tmp_name, $SN);    // Optional name
    $mail->addAttachment($image_tmp_name, $image);    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Pembuatan ktp';
    $mail->Body  ="<b>Email Pengirim : </b>$email_p<br>";   
    $mail->Body .="<b>Nama Pengirim : </b>$name<br>";
    $mail->Body .="<b>Usia : </b>$usia<br>";
    $mail->Body .="<b>Tempat lahir : </b>$tempatlahir<br>";
    $mail->Body .="<b>Alamat : </b>$alamat<br>";
    $mail->Body .="<b>Agama : </b>$agama<br>";
    $mail->Body .="<b>Status Perkawinan : </b>$statusperkawinan<br>";
    $mail->Body .="<b>pekerjaan : </b>$pekerjaan<br>";
    $mail->Body .="<b>kewarganegaraan : </b>$kewarganegaraan<br>";


    $mail->send();
    echo "Selamat $name pesan telah terkirim pastikan tidak mengirim file yang sama";
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
mysqli_query ($conn, "INSERT INTO `user_ktp`(`email`, `name`, `usia`, `tml`, `almt`, `agama`, `SK`, `pkj`, `wn`, `image`, `SRT`, `SRW`, `KK`, `akta`, `SN`) VALUES "
        . "('$email_p','$name','$usia','$tempatlahir','$alamat','$agama','$statusperkawinan','$pekerjaan','$kewarganegaraan','$image','$SRT','$SRW','$KK','$akta','$SN')");