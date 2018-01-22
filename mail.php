<?php
extract($_POST);
$to = "ganatraarpita@gmail.com";
$subject = "website inquiry";
$txt = "Hi i'm $name, $Message, my email id is $email";
$headers = "From: admin@silverwingtechnologies.com";

mail($to,$subject,$txt,$headers);
header("location: index.html");
?>