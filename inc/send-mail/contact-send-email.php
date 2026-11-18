<?php

// Anti-spam Honeypot Check: If invisible honeypot field is filled by a bot, silently exit
if (!empty($_POST["website_hp"])) {
    echo "success";
    exit();
}

require "SMTP.php";
require "PHPMailer.php";
require "Exception.php";

use PHPMailer\PHPMailer\PHPMailer;

// Sanitize inputs to prevent Email Header Injection
$name = str_replace(["\r", "\n"], '', trim($_POST["name"] ?? ''));
$email = trim($_POST["email"] ?? '');
$phone = trim($_POST["phone"] ?? '');
$subject = str_replace(["\r", "\n"], '', trim($_POST["subject"] ?? ''));
$message = trim($_POST["message"] ?? '');

// Check if required fields are filled
if (empty($name) || empty($email) || empty($phone) || empty($subject) || empty($message)) {
    echo "Fill in the all fields!";
    exit();
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address!";
    exit();
}

if (!preg_match("/^[0-9+\s\-()]{9,20}$/", $phone)) {
    echo "Invalid phone number! Enter a valid contact number.";
    exit();
}

// HTML-safe entities for email content
$safe_name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$safe_email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
$safe_phone = htmlspecialchars($phone, ENT_QUOTES, 'UTF-8');
$safe_subject = htmlspecialchars($subject, ENT_QUOTES, 'UTF-8');
$safe_message = nl2br(htmlspecialchars($message, ENT_QUOTES, 'UTF-8'));
$current_year = date('Y');

$mail = new PHPMailer;
$mail->IsSMTP();
$mail->Host = 'mail.werepair.lk';
$mail->SMTPAuth = true;
$mail->Username = 'info@werepair.lk';
$mail->Password = 'hX.0.W3*k(Ximu4h';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;
$mail->CharSet = 'UTF-8';
$mail->setFrom('info@werepair.lk', 'We Repair Website');
$mail->addReplyTo($email, $name);
$mail->addAddress('info@werepair.lk');
$mail->isHTML(true);
$mail->Subject = "Contact Request: " . $subject;

$bodyContent = "
<div style='font-family: Arial, sans-serif; padding: 20px; max-width: 600px; margin: 0 auto; border: 1px solid #eee; border-radius: 8px;'>
    <div style='background-color: #bb1919; color: #ffffff; padding: 15px; border-radius: 6px; text-align: center;'>
        <h2 style='margin: 0; color: #ffffff;'>New Contact Inquiry</h2>
    </div>
    <div style='background-color: #f8f9fa; padding: 20px; border-radius: 6px; margin-top: 15px;'>
        <p><strong>Name:</strong> {$safe_name}</p>
        <p><strong>Email:</strong> <a href='mailto:{$safe_email}'>{$safe_email}</a></p>
        <p><strong>Phone:</strong> <a href='tel:{$safe_phone}'>{$safe_phone}</a></p>
        <p><strong>Subject:</strong> {$safe_subject}</p>
        <p><strong>Message:</strong></p>
        <div style='background: #fff; padding: 12px; border-left: 3px solid #bb1919; border-radius: 4px;'>{$safe_message}</div>
    </div>
    <div style='background-color: #0e152c; color: #ffffff; padding: 10px; border-radius: 6px; text-align: center; margin-top: 15px;'>
        <p style='color: #ffffff; margin: 0; font-size: 12px;'>Copyright &copy; {$current_year} We Repair. All Rights Reserved.</p>
    </div>
</div>";

$mail->Body = $bodyContent;

if (!$mail->send()) {
    echo "Could not send message. Please try calling us directly.";
} else {
    // Send customer auto-reply
    $autoReply = new PHPMailer;
    $autoReply->IsSMTP();
    $autoReply->Host = 'mail.werepair.lk';
    $autoReply->SMTPAuth = true;
    $autoReply->Username = 'info@werepair.lk';
    $autoReply->Password = 'hX.0.W3*k(Ximu4h';
    $autoReply->SMTPSecure = 'ssl';
    $autoReply->Port = 465;
    $autoReply->CharSet = 'UTF-8';
    $autoReply->setFrom('info@werepair.lk', 'We Repair');
    $autoReply->addReplyTo('info@werepair.lk', 'We Repair');
    $autoReply->addAddress($email, $name);
    $autoReply->isHTML(true);
    $autoReply->Subject = 'Thank you for contacting We Repair';

    $autoBodyContent = "
    <div style='font-family: Arial, sans-serif; padding: 20px; max-width: 600px; margin: 0 auto; border: 1px solid #eee; border-radius: 8px;'>
        <div style='background-color: #bb1919; color: #ffffff; padding: 15px; border-radius: 6px; text-align: center;'>
            <h2 style='margin: 0; color: #ffffff;'>Thank You for Reaching Out</h2>
        </div>
        <div style='background-color: #f8f9fa; padding: 20px; border-radius: 6px; margin-top: 15px;'>
            <p>Dear {$safe_name},</p>
            <p>Thank you for contacting We Repair. We have received your inquiry regarding <strong>{$safe_subject}</strong> and one of our hardware technicians will get in touch with you shortly.</p>
            <p><strong>Your Message:</strong></p>
            <div style='background: #fff; padding: 12px; border-left: 3px solid #bb1919; border-radius: 4px;'>{$safe_message}</div>
            <p style='margin-top: 20px;'>For urgent hardware emergencies, feel free to call our direct hotline: <a href='tel:+94714021182'><strong>+94 71 402 1182</strong></a>.</p>
            <p>Best regards,<br><strong>We Repair Team</strong></p>
        </div>
        <div style='background-color: #0e152c; color: #ffffff; padding: 10px; border-radius: 6px; text-align: center; margin-top: 15px;'>
            <p style='color: #ffffff; margin: 0; font-size: 12px;'>Copyright &copy; {$current_year} We Repair. All Rights Reserved.</p>
        </div>
    </div>";

    $autoReply->Body = $autoBodyContent;
    @$autoReply->send();

    echo "success";
}
