<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Validate form inputs (you can add more validation if needed)

  // Forward the email
  $to = 'dispatch@fosterwrecker.com';
  $subject = 'Contact Form Submission';
  $body = "Name: $name\nEmail: $email\n\n$message";
  $headers = "From: $email";

  if (mail($to, $subject, $body, $headers)) {
    echo 'Thank you for your message. We will get back to you soon.';
  } else {
    echo 'Sorry, there was an error sending your message. Please try again.';
  }
}
?>
