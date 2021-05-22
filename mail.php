<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['number']))
$email = $_POST['number'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['subject']))
$subject = $_POST['subject'];

$content="From: $name \n Email: $email \n Number: $number \n Message: $message";
$recipient = "marketing@themarketingmeister.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $number, $content, $mailheader) or die("Error!");
  // Redirect to another page
  header('location: home.html');
?>