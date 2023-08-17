<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Change this to your actual email address
    $to = "shishirdune2022@gmail.com";
    $subject = "New Contact Form Submission: $subject";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    $fullMessage = "Name: $fname $lname\n";
    $fullMessage .= "Email: $email\n\n";
    $fullMessage .= "Message:\n$message";

    if (mail($to, $subject, $fullMessage, $headers)) {
        $response = "Thank you for your message. It has been sent successfully.";
    } else {
        $response = "Sorry, there was an error sending your message. Please try again later.";
    }
}
?>
