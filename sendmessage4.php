<?php
$name= $_POST['name'];
$email= $_POST['email'];
$message=  $_POST['message'];

$body = "
Name: $name
Email: $email

$message

";

mail("sheryl@shookies.net","$name from shookies.net",$body);
header("Location:http://shookies.net/thankyou.php");
?>
