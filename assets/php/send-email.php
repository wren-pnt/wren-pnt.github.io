<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];

  $to = "c.spencerstock@gmail.com";
  $headers = "From: $email\r\nReply-To: $email\r\n";

  mail($to, $subject, $message, $headers);

  echo "Thank you for your message!";
}
?>


