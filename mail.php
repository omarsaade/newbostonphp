<?php

$to = 'omarsaadeh11@gmail.com';
$subject = 'this ios an email';
$body =  'this is a test email';
$headers = 'From:someone@phpacademy.org';

if (mail($to, $subject, $body, $headers)) {
    echo 'email has been sent to ' .$to;
} else {
    echo 'there was an error sending the mail';
}









?>