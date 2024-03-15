<?php

require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$mail = new PHPMailer(true);

$mail->isSMTP();

$mail->CharSet = "UTF-8";
$mail->isHTML(true);   

$mail->setFrom('katsiaruna.n@tut.by', 'От меня');
$mail->addAddress('katsiryna.n@gmail.com');
$mail->Subject = 'Данные с лендинга Насти';

$mail->Body    = 'This is the HTML message body <b>in bold!</b>';


$mail->send();

echo 'Message has been sent';

?>



