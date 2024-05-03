<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $subject = $_POST["email"];
    $body = $_POST["message"];

    // Recipient email address
    $to = "cushyly79@gmail.com"; // Replace with your Gmail address

    // Set headers
    $headers = "From: " . $name . "\r\n";
    $headers .= "Reply-To: " . $name . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email. Please try again later.";
    }
}
?>
