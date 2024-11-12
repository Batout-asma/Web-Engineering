<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $title = htmlspecialchars(trim($_POST["title"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    if (!empty($email) && !empty($phone)) {
        $to = "gardienviesh@gmail.com";  // Replace with your email
        $subject = "New Contact Form Submission: " . $title;
        $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message";
        $headers = "From: $email";

        if (mail($to, $subject, $body, $headers)) {
            echo "Message sent successfully!";
        } else {
            echo "Failed to send message.";
        }
    } else {
        echo "Email and phone are required fields!";
    }
} else {
    echo "Invalid request.";
}
?>
