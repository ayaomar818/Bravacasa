<?php
// $name= $_POST ['Name'];
// $visitor_email = $_POST['Email'];
// $message = $_POST['Message'];

// $email_from = 'https://ayaomar818.github.io/Bravacasa/';
// $email_subject = "New ";
// $email_body = "Name: $name.\n".
//               "Email: $visitor_email.\n".
//               "Message: $message.\n";
// $to = "ayaomar818@gmail.com";
// $headers = "From : $email_from \r\n";
// $headers .="Reply-To: $visitor_email \r\n";
// mail($to,$email_subject,$email_body,$headers);
// header ("Location: index.html");
if(isset($_POST['Send'])){
    $to = "ayaomar81@gmail.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $name = $_POST['Name'];
    $subject = "Form submission";
    $message = $Name . " " . " wrote the following:" . "\n\n" . $_POST['Message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $Name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }

?>