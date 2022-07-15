<?php
$name = $_POST['name'];
$email = $_POST['email'];
$object = $_POST['object'];
$message = $_POST['message'];

$email_form = "pk8diallo@gmail.com";
$email_subject = "New Form Submission";

$email_body = "User Name: $name\n" . "User Email: $email\n" . "Subject: $object\n" . "Message: $message";

$to = "contactpk14@gmail.com";

$headers = "From: $email_form \r\n";
$headers .= "Reply-To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

header('Location: contact.html');

?>