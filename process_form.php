<?php
$name = $_POST['fname']; // Change to 'fname' to match your HTML input names
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com'; // Corrected variable name

$email_subject = 'New Form Submission';

$email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "User Subject: $subject.\n".
                "User Message: $message.\n";

$to = 'shishirdune2022@gmail.com';

$headers = "From: $email_from \r\n";
$headers .= "Reply-to: $visitor_email \r\n"; // Corrected header variable name

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");
?>
