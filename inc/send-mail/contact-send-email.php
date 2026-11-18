<?php

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

$name = $_POST["name"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$subject = $_POST["subject"];
$message = $_POST["message"];

// Check if required fields are filled
if ($name == "" || $email == "" || $phone == "" || $subject == "" || $message == "") {
    echo "Fill in the all fields!";
} else  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address!";
} else if (!preg_match("/^[0-9]{10,15}$/", $phone)) {
    echo "Invalid phone number! Enter only digits (10-15 numbers).";
} else {

    $mail = new PHPMailer;
    $mail->IsSMTP();
    $mail->Host = 'mail.werepair.lk';
    $mail->SMTPAuth = true;
    $mail->Username = 'info@werepair.lk';
    $mail->Password = 'hX.0.W3*k(Ximu4h';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;
    $mail->setFrom('info@werepair.lk', 'We Repair');
    $mail->addReplyTo($email, $name);
    $mail->addAddress('info@werepair.lk');
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $bodyContent = "
                <div style='font-family: Arial, sans-serif; padding: 20px;'>
                    <div style='background-color: #770a0aff; color: #ffffffff; padding: 10px; border-radius: 5px; text-align: center;'>
                        <h1>Contact Request</h1>
                    </div>
                    <div style='background-color: #f8f9fa; padding: 20px; border-radius: 5px; margin-top: 10px;'>
                        <p><strong>Name:</strong> $name</p>
                        <p><strong>Email:</strong> $email</p>
                        <p><strong>Phone:</strong> $phone</p>
                        <p><strong>Message:</strong><br>$message</p>
                    </div>
                    <div style='background-color: #0e152c; color: #373D48; padding: 10px; border-radius: 5px; text-align: center;'>
        <p style='color: white; margin: 4px; font-size: 12px;'>Copyright © 2025 We Repair || All Rights Reserved</p>
    </div>
                </div>";

    $mail->Body  = $bodyContent;

    if (!$mail->send()) {
        // echo $mail->ErrorInfo;
    } else {

        $mail = new PHPMailer;
        $mail->IsSMTP();
        $mail->Host = 'mail.werepair.lk';
        $mail->SMTPAuth = true;
        $mail->Username = 'info@werepair.lk';
        $mail->Password = 'hX.0.W3*k(Ximu4h';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->setFrom('info@werepair.lk', 'We Repair');
        $mail->addReplyTo('info@werepair.lk', 'We Repair');
        $mail->addAddress("$email");
        $mail->isHTML(true);
        $mail->Subject = 'Thank you for contacting us';
        $bodyContent = " <div style='font-family: Arial, sans-serif; padding: 20px;'>
        <div style='background-color: #690909ff; color: #ffffffff; padding: 10px; border-radius: 5px; text-align: center;'>
            <h1>Thank you for contacting us</h1>
        </div>
        <div style='background-color: #f8f9fa; padding: 20px; border-radius: 5px; margin-top: 10px;'>
            <p>Dear $name,</p>
            <p>Thank you for reaching out. We have received your message and will get back to you shortly.</p>
            <p><strong>Your message:</strong><br>$message</p>
            <p>Best regards,<br>We Repair</p>
        </div>
        <div style='background-color: #0e152c; color: #373D48; padding: 10px; border-radius: 5px; text-align: center;'>
             <p style='color: white; margin: 4px; font-size: 12px;'>Copyright © 2025 We Repair || All Rights Reserved</p>
        </div>
    </div>";

        $mail->Body  = $bodyContent;
        if (!$mail->send()) {
        } else {
            echo "success";
        }
    }
}
