<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting form data
    $name = htmlspecialchars(trim($_POST['yourName']));
    $email = htmlspecialchars(trim($_POST['yourEmail']));
    $phone = htmlspecialchars(trim($_POST['yourPhone']));
    $message = htmlspecialchars(trim($_POST['comments']));

    // Email settings
    $to = 'manuahnas@gmail.com'; // Change this to your email address
    $subject = 'New UpStyle Quote Form ';
    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage:\n$message";
    $headers = "From: $email\r\nReply-To: $email\r\n";

    // Sending the email
    if (mail($to, $subject, $body, $headers)) {
        // Redirect to a thank you page or display a success message
        echo "Thank you for contacting us, $name. We will get back to you shortly!";
    } else {
        echo "There was a problem sending your message. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
