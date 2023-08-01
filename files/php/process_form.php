<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set up the email
    $to = "mohdadil969555@gmail.com"; // Replace with the recipient's email address
    $subject = "New Form Submission";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Compose the email body
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        // Email sent successfully
        echo "Thank you for your message! We have received your submission.";
    } else {
        // Failed to send the email
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
