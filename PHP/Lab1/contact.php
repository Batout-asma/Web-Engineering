<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $title = $_POST['title'];
    $message = $_POST['message'];

    $file = fopen("submissions.txt", "a");
    fwrite($file, "Name: $name\nEmail: $email\nPhone: $phone\nTitle: $title\nMessage: $message\n\n");
    fclose($file);

    echo "Your message has been recorded successfully.";
}
?>
