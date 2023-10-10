<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $toEmail = "adbishal569@gmail.com"; // Replace with your Gmail address

    // Create email headers
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send email
    if (mail($toEmail, $subject, $message, $headers)) {
        echo "success"; // You can handle the success response on the client-side
    } else {
        echo "error"; // You can handle the error response on the client-side
    }
}
?>
