<?php
$mailbox = "iut.projtut.taketwointeractive@gmail.com";


function sanitize_my_email($field)
{
    $field = filter_var($field, FILTER_SANITIZE_EMAIL);
    if (filter_var($field, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail ';
$headers = 'From: noreply @ company. com';
//check if the email address is invalid $secure_check
$secure_check = sanitize_my_email($mailbox);
if ($secure_check == false) {
    echo "Invalid input";
} else { //send email
    if(mail($mailbox, $subject, $message, $headers)) {
        echo "Mail sent";
    } else {
        echo "Sent failed";
    }
    echo "This email is sent using PHP Mail";
}
