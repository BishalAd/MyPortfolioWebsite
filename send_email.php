<?php
require 'C:\Program Files\PHPMailer\test\PHPMailer'; // Make sure to include the PHPMailer library

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Create a PHPMailer object
    $mail = new PHPMailer;

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587; // Use 465 if you're having issues with 587
    $mail->SMTPSecure = 'tls';
    $mail->SMTPAuth = true;

    $mail->Username = 'onlinesewatest@gmail.com';

    $mail->Password = 'Online Sewa Test @123';

    $mail->setFrom($email, $name);
    $mail->addAddress('mmeow6844@gmail.com'); 
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body = $message;

    if ($mail->send()) {
        echo "success"; // You can handle the success response on the client-side
    } else {
        echo "error"; // You can handle the error response on the client-side
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
?>
