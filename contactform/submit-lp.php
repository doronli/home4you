<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/functions.php';
require_once __DIR__.'/config.php';

session_start();



// Everything seems OK, time to send the email.

$mail = new \PHPMailer\PHPMailer\PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = CONTACTFORM_PHPMAILER_DEBUG_LEVEL;
    $mail->isSMTP();
    $mail->Host = CONTACTFORM_SMTP_HOSTNAME;
    $mail->SMTPAuth = true;
    $mail->Username = CONTACTFORM_SMTP_USERNAME;
    $mail->Password = CONTACTFORM_SMTP_PASSWORD;
    $mail->SMTPSecure = CONTACTFORM_SMTP_ENCRYPTION;
    $mail->Port = CONTACTFORM_SMTP_PORT;

    // Recipients
    $mail->setFrom(CONTACTFORM_FROM_ADDRESS, CONTACTFORM_FROM_NAME);
    $mail->addAddress(CONTACTFORM_TO_ADDRESS, CONTACTFORM_TO_NAME);
    $mail->addAddress("lisbona107@gmail.com", CONTACTFORM_TO_NAME);
    $mail->addReplyTo($_POST['email'], $_POST['name']);

    // Content
    $mail->Subject = "Landing Page Moshe Project";
    $mail->Body    = <<<EOT
    Name: {$_POST['name']}
    Phone: {$_POST['phone']}

EOT;

    $mail->send();
    redirectSuccess();
} catch (Exception $e) {
    redirectWithError("An error occurred while trying to send your message: ".$mail->ErrorInfo);
}
