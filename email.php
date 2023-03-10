<?php
include("PHPMailer/src/Exception.php");
include("PHPMailer/src/OAuth.php");
include("PHPMailer/src/POP3.php");
include("PHPMailer/src/PHPMailer.php");
include("PHPMailer/src/SMTP.php");
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$mail= new PHPMailer(true);
try{
    $mail->SMTPDebug=2;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='thinhboop@gmail.com';
    $mail->Password='0352403903';
    $mail->SMTPSecure='tls';
    $mail->Port=587;
    $mail->CharSet='UTF-8';
    $mail->setFrom('thinhboop@gmail.com');
    $mail->addAddress('phuong16397@gmail.com');
    $mail->isHTML(true);
    $mail->Subject='Hi Ms phương';
    $mail->Body='LOP 519B rất ngoan';
    $mail->AltBody='Và rất chăm học';
    $mail->send();
    echo 'Message has been sent';
}
catch(Exception $m){
    echo 'Message could not be sent. Mailer Error:'.$mail->ErrorInfo;
}
?>