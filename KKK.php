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
$NKK=$_POST['NKK'];
$AK=$_POST['AK'];
$Hub=$_POST['Hub'];
$AKK=$_POST['AKK'];
$HB=$_POST['HB'];
$almt=$_POST['almt'];
$KLR=$_POST['KLR'];
$KCT=$_POST['KCT'];
$KTA=$_POST['KTA'];
$JP=$_POST['JP'];

$RT=$_FILES['RT']['name']; 
$RT_tmp_name=$_FILES['RT']['tmp_name'];
$RW=$_FILES['RW']['name']; 
$RW_tmp_name=$_FILES['RW']['tmp_name'];
$SP=$_FILES['SP']['name']; 
$SP_tmp_name=$_FILES['SP']['tmp_name'];
$KKL=$_FILES['KKL']['name']; 
$KKL_tmp_name=$_FILES['KKL']['tmp_name'];
$SN=$_FILES['SN']['name']; 
$SN_tmp_name=$_FILES['SN']['tmp_name'];


try {
    //Server settings
    $mail->SMTPDebug = 0;                                       // Enable verbose debug output
    $mail->isSMTP();                                            // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'wahyonoasukirik@gmail.com';                     // SMTP username
    $mail->Password   = 'gclbjqbfkvubhbxe';                               // SMTP password
    $mail->SMTPSecure = 'ssl';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 465;                                    // TCP port to connect to
    $mail->Mailer = "smtp"; 
    $mail->Sender =($email_p);

    //Recipients
    $mail->setFrom($email_p);
$mail->AddReplyTo($email_p); // menunjukkan header ReplyTo

    
    $mail->addAddress('wahyonoasukirik@gmail.com');     // Add a recipient

    // Attachments
    $mail->addAttachment($RT_tmp_name, $RT);    // Optional name
    $mail->addAttachment($RW_tmp_name, $RW);    // Optional name
    $mail->addAttachment($SP_tmp_name, $SP);    // Optional name
    $mail->addAttachment($KKL_tmp_name, $KKL);    // Optional name
    $mail->addAttachment($SN_tmp_name, $SN);    // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Kartu Keluarga';
    $mail->Body  ="<b>Email Pengirim : </b>$email_p<br>"; 
    $mail->Body  .="<b>Nama Kepala Keluarga : </b>$NKK<br>"; 
    $mail->Body  .="<b>Anggota Keluarga : </b>$AK<br>"; 
    $mail->Body  .="<b>Hubungan Keluarga: </b>$Hub<br>"; 
    $mail->Body  .="<b>Anggota Keluarga : </b>$AKK<br>"; 
    $mail->Body  .="<b>Hubungan Keluarga : </b>$HB<br>"; 
    $mail->Body  .="<b>Alamat Lengkap : </b>$almt<br>";
    $mail->Body  .="<b>Kelurahan : </b>$KLR<br>"; 
    $mail->Body  .="<b>Kecamatan : </b>$KCT<br>"; 
    $mail->Body  .="<b>Kota: </b>$KTA<br>"; 
    $mail->Body  .="<b>Jenis Pekerjaan: </b>$JP<br>"; 



    $mail->send();
    echo 'Pesan berhasil dikirim Pastikan lampirkan dokumen dengan benar';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

mysqli_query ($conn, "INSERT INTO `user_kk`(`email`, `NKK`, `AK`, `Hub`, `AKK`, `HB`, `almt`, `KLR`, `KCT`, `KTA`, `JP`, `RT`, `RW`, `SP`, `KKL`, `SN`) VALUES "
        . "('$email_p','$NKK','$AK','$Hub','$AKK','$HB','$almt','$KLR','$KCT','$KTA','$JP','$RT','$RW','$SP','$KKL','$SN')");
