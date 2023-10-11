<?php
require 'path/to/PHPMailerAutoload.php'; // Make sure to include the PHPMailer library

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $toEmail = "Online Sewa Test @123"; // Replace with your Gmail address
    $smtpUsername = "onlinesewatest@gmail.com"; // Your Gmail username
    $smtpPassword = "Online Sewa Test @123"; // Your Gmail password

    // Create a PHPMailer object
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587; // Use 465 if you're having issues with 587
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;

    $mail->setFrom($email, $name);
    $mail->addAddress($toEmail);
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;

    if ($mail->send()) {
        echo "success"; // You can handle the success response on the client-side
    } else {
        echo "error"; // You can handle the error response on the client-side
    }
}
?>
