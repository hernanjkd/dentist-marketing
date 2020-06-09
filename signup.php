<?php

$name = $_REQUEST['name'];
$email = $_REQUEST['email'];

$subject = "Dentist New Subscriber - $name";

$header = "From: Dentist Website <dentist94573@aol.com>\r\n";

$body = "
Name: $name
Email: $email
";

mail( 'hernanjkd@gmail.com' , $subject , $body , $header );

?>