<?php
$last_name = $_POST['last_name'];
$first_name = $_POST['first_name'];
$email = $_POST['email'];
$number = $_POST['number'];
$address = $_POST['address'];
$message = $_POST['message'];
$formcontent=" From: $last_name, $first_name \n Message: $message";
$recipient = "joebathelt@gmail.com";
$subject = "Ratgeb Kunstbuch";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html'>Return Home</a>";
?>
