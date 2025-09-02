<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize inputs
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $phone   = htmlspecialchars(trim($_POST["phone"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Validate inputs
    if (empty($name) || empty($email) || empty($message)) {
        echo "All required fields must be filled!";
        exit;
    }

    // Email settings
    $to      = "arpanlamsalofficial@example.com"; 
    $subject = "New Contact Form Message from $name";
    $body    = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "✅ Thank you! Your message has been sent.";
    } else {
        echo "❌ Sorry, something went wrong. Please try again later.";
    }
}
?>
