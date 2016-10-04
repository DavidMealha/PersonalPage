<?php 
    
    if (isset($_POST["submit"])) {
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $to = 'davidmealha@hotmail.com'; 
        
        $body = "From: $email\n Subject: $subject\n Message:\n $message";

        // If there are no errors, send the email
        if (mail ($to, $subject, $body, $from)) {
            $result='<div class="alert alert-success">Thank You! I will be in touch</div>';
        } else {
            $result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
        }
    }
?>