<?php
if(isset($_POST['submit'])){
$name= $_POST ['Name'];
$email = $_POST['Email'];
$address = $_POST['Address'];
$mobile = $_POST['Mobile'];
$file = $_POST['CV'];

$email_from = '';
$email_subject = "New CV";
$email_body = "Name: $name.\n".
              "Email: $email.\n".
              "Address: $address.\n".
              "Mobile: $mobile.\n". 
              "CV : $file.\n";
$to = "ayaomar818@gmail.com";
$headers = "From : $email_from \r\n";
$headers .="Reply-To: $email \r\n";
mail($to,$email_subject,$email_body,$headers);
echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
// header ("Location: index.html");
// $success = '<div class="alert alert-success">Send Successfuly</div>'
}
?>