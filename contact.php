<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['fname'];
    $visitor_email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $email_from = 'info@yourwebsite.com'; // Change this to your actual email address
    $email_subject = 'New Form Submission';
    $email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                  "User Subject: $subject.\n".
                  "User Message: $message.\n";

    $to = 'shishirdune2022@gmail.com';

    $headers = "From: $email_from \r\n";
    $headers .= "Reply-to: $visitor_email \r\n";

    $success = mail($to, $email_subject, $email_body, $headers);

    if ($success) {
        header("Location: contact.html?status=success");
    } else {
        header("Location: contact.html?status=error");
    }
} else {
    header("Location: contact.html"); // Redirect if accessed directly without form submission
}
?>
