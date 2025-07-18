<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = htmlspecialchars($_POST['name']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);
  
  $to = "you@example.com";
  $subject = "Portfolio Message from $name";
  $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

  if (mail($to, $subject, $body)) {
    echo "Message sent successfully.";
  } else {
    echo "Message failed to send.";
  }
}
?>
