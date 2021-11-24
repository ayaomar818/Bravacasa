<?php
if(isset($_POST['submit'])){
    $to = ""; // this is the company's Email address
    $name = $_POST['Name'];
    $from = $_POST['Email']; // this is the sender's Email address
    $address = $_POST['Address'];
    $mobile = $_POST['Mobile'];
    $file = $_POST['CV'];
    $subject = "CV From BRAVACASA website";
    $subject2 = "Confirmation: Message was submitted successfully "; // For customer confirmation
    $email_body = "Name: $name.\n".
              "Email: $email.\n".
              "Address: $address.\n".
              "Mobile: $mobile.\n". 
              "CV : $file.\n";
    $message2 = "Dear" . $name . "\n"
                . "Thank you for contacting us. We will contact you as soon as possible" . "\n\n"
                . "Best Regards,". "\n\n" . "BRAVACASA" ;
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    $result1= mail($to,$subject,$email_body,$headers);
    $result2= mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    if ($result1 && $result2) {
        // $success = '<div class="alert alert-success">Send Successfuly</div>'
        echo "Mail Sent. Thank you " . $name ;
    } else {
        echo "Sorry! Message was not sent, Try again Later.";
    }
}
?>
