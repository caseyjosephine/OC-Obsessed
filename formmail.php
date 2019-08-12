<?php

// your email address
$youremail = "beachbelle04@yahoo.com";

// field validation
if ($email=="" || $comments=="" || $name=="")

{
include ('header.php');
print ("All fields are required! Please go back and try again.");
include ('footer.php');
}

else {

// email validation
if(!eregi('^([._a-z0-9-]+[._a-z0-9-]*)@(([a-z0-9-]+\.)*([a-z0-9-]+)(\.[a-z]{2,3})?)$', $email)) {
include ('header.php');
print ("Your email address does not appear to be valid. Please go back and try again.");
include ('footer.php');
exit;
}

// send email
$headers = "From: \"$name\" <$email>\n";
$subject = "Feedback Form"; 
$message = "$comments";

mail ("$youremail", "$subject", $message, $headers);
include ('header.php');
print ("Thank you $name, your email has been sent. I will review your email and get back to you as soon as I can!");
include ('footer.php');

} 
?>