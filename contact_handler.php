<?php
if(isset($_POST['Name']) && isset($_POST['Email'])){
    $name = $_POST['Name'];  
    $email = $_POST['Email'];   // this is your Email address
	$message = $_POST['Message'];
    $to = '';
    $subject = "Message From BRAVACASA website";
    $subject2 = "Confirmation: Message was send successfully "; // For customer confirmation
    $body='<html>
    <body> 
    <h2> feedback </h2>
    <p>Name<br>'.$name.'</p>
    <p>Email<br>'.$email.'</p>
	<p>Message<br>'.$message.'</p>
    </body>
    </html>';
    $message2 = "Dear" . $name . "\n"
                . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
                . "You send the following message: " . "\n" . $_POST['Message'] . "\n\n"
                . "Regards," ;
    //headers
    $headers = "From: ".$name." <".$email.">\r\n";
    $headers .="Reply-To: ".$email."\r\n";
	$headers .="MIME-Version:1.0\r\n";
	$headers .="Content-type:text/html;charset=utf-8";
    $headers2 = "From:" . $to;
    $send = mail($to, $subject, $body, $headers);
    $send2 = mail($email, $subject2, $message2, $headers2);
    if($send && $send2){
    echo'<html><head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        </head><body> <div style="text-align: center; margin-top: 20px;">
		<div id="success_message">
            <h3>Your message sent successfully!</h3> 
            <p> We will get back to you soon. </p>
        </div>
        </div></body></html>';
    }else{
		echo'<html><head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        </head><body><div style="text-align: center; margin-top: 20px;"><div id="error_message" style="width:100%; height:100%; "> <h3>Error</h3>  Sorry there was an error sending your message. please try again.
        </div></div></body><html>';
    }
}
?>