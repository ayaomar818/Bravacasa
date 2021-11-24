<?php
// if(isset($_POST['submit'])){
// $name= $_POST ['Name'];
// $email = $_POST['Email'];
// $address = $_POST['Address'];
// $mobile = $_POST['Mobile'];
// $file = $_POST['CV'];

// $email_subject = "New CV";
// $email_body = "Name: $name.\n".
//               "Email: $email.\n".
//               "Address: $address.\n".
//               "Mobile: $mobile.\n". 
//               "CV : $file.\n";
// $to = "ayaomar818@gmail.com";
// $headers = "From : $email_from \r\n";
// $headers .="Reply-To: $email \r\n";
// mail($to,$email_subject,$email_body,$headers);
// echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
// header ("Location: index.html");
// $success = '<div class="alert alert-success">Send Successfuly</div>'
// }
if(isset($_POST['submit'])){
    $to = "ayaomar818@gmail.com"; // this is your Email address
    $name = $_POST['Name'];
    $from = $_POST['Email']; // this is the sender's Email address
    $address = $_POST['Address'];
    $mobile = $_POST['Mobile'];
    $file = $_POST['CV'];
    $subject = "Form submission";
    $subject2 = "Confirmation: Message was submitted successfully "; // For customer confirmation
    $message2 = "Dear" . $name . "\n"
                . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
                . "Regards," ;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $result1= mail($to,$subject,$headers);
    $result2= mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    // echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    if ($result1 && $result2) {
        $success = "Your Message was sent Successfully!";
      } else {
        $failed = "Sorry! Message was not sent, Try again Later.";
    }
}
?>