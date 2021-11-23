<?php
$name= $_POST ['Name'];
$visitor_email = $_POST['Email'];
$message = $_POST['Message'];

$email_from = 'https://ayaomar818.github.io/Bravacasa/';
$email_subject = "New ";
$email_body = "Name: $name.\n".
              "Email: $visitor_email.\n".
              "Message: $message.\n";
$to = "ayaomar818@gmail.com";
$headers = "From : $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header ("Location: index.html");
?>