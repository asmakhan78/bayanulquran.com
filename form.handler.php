<?php
$name = $_POST['Name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'bayanulkalam@gmail.com';

$email_subject = 'New form submission';

$email_body = "user Name: $name.\n".
               "user email: $visitor_email.\n".
               "Subject: $subject.\n".
               "user message: $message.\n";


    $to = 'asmakhan78423@gmail.com';
    $headers = "From: $email_from \r\n";
    
    $headers .= "Reply_to: $visitor_email \r\n";

    email($to,$email_subject,$email_body,$headers);
    
    header("Location: contact.html");

?>