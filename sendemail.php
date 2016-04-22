<?php
$name       = @trim(stripslashes($_POST['name']));
$from       = @trim(stripslashes($_POST['email']));
$subject    = @trim(stripslashes($_POST['subject']));
$message    = @trim(stripslashes($_POST['message']));
$to   		= 'filippo.boiani@polleg.it';
$to2   		= 'riccardo.sibani@polleg.it';


$headers   = array();
$headers[] = "MIME-Version: 1.0";
$headers[] = "Content-type: text/plain; charset=iso-8859-1";
$headers[] = "From: {$name} <{$from}>";
$headers[] = "Reply-To: <{$from}>";
$headers[] = "Subject: {$subject}";
$headers[] = "X-Mailer: PHP/".phpversion();

mail($to, $subject, $message, $headers);
mail($to2, $subject, $message, $headers);

die;
