
<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST['userName'];
  $email = $_POST['userEmail'];
  $phone = $_POST['userPhone'];
  $message = $_POST['message'];

  $to = "hanslemkimeng5@gmail.com";
  $subject = "New Contact Form Submission";
  $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";

  if (mail($to, $subject, $body)) {
    echo "Email sent successfully!";
  } else {
    echo "Email could not be sent.";
  }
}
?>