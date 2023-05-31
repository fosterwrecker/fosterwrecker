<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up the email details
    $to = 'fosterwrecker@gmail.com';  
    $subject = 'New Contact Form Submission';
    $headers = "From: $name <$email>\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Compose the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message";

    // Send the email
    if (mail($to, $subject, $email_content, $headers)) {
        // Email sent successfully
        echo "Thank you for your message. We will get back to you soon!";
    } else {
        // Error sending email
        echo "Oops! An error occurred while sending your message. Please try again.";
    }
}
?>
