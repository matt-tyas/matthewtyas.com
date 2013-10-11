<?php

// Blank message to start with so we can append to it.
$message = '';

// Check that name & email aren't empty.
if(empty($_POST['name']) || empty($_POST['email'])){
    die('Please ensure name and email are provided.');
}

// Check the checkbox
// $checkString = 'I have not been checked.';
// if(isset($_POST['checkme'])){
//    $checkString = 'I have been checked.';
//}

// Construct the message
$message .= <<<TEXT
    Name: {$_POST['name']}
    Email: {$_POST['email']}
    Telephone: {$_POST['telephone']}
    No. of lone worker employees: {$_POST['employees']}    
    {$checkString}
TEXT;

// Email to send to
$to = 'matthewtyas@hotmail.com';

// Email Subject
$subject = 'Enquiry received from website';

// Name to show email from
$from = 'Your Site';

// Domain to show the email from
$fromEmail = 'test@testdomain.com';

// Construct a header to send who the email is from
$header = 'From: ' . $from . '<' . $fromEmail . '>';

// Try sending the email
if(!mail($to, $subject, $message, $header)){
    die('Sorry, there was an error, please try later');
}else{
    die('<span>Thank you, enquiry sent</span>');
}

?>