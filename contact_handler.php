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
    $to = "ayaomar818@gmail.com"; // this is your Email address
    $name = $_POST['Name'];
    $from = $_POST['Email']; // this is the sender's Email address
    $subject = "Form submission";
    $subject2 = "Confirmation: Message was submitted successfully "; // For customer confirmation
    $message = $name . " " . " wrote the following:" . "\n\n" . $_POST['Message'];
    $message2 = "Dear" . $name . "\n"
                . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
                . "You submitted the following message: " . "\n" . $_POST['message'] . "\n\n"
                . "Regards," ;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $result1= mail($to,$subject,$message,$headers);
    $result2= mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    if ($result1 && $result2) {
        $success = "Your Message was sent Successfully!";
      } else {
        $failed = "Sorry! Message was not sent, Try again Later.";
    }
}

?>