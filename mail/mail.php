
<?php


require_once ('../Server_v02/mail/PHPMailer_5.2.0/class.phpmailer.php');

$mailSender             = new PHPMailer(); // defaults to using php "mail()"

$body             = $_POST['name'] . "  " . $_POST['email'] . " " . $_POST['subject'] . " " . $_POST['message'];
$body             = eregi_replace("[\]",'',$body);

$mailSender->AddReplyTo("info@polleg.it","Polleg.it");

$mailSender->SetFrom('info@polleg.it', 'Polleg.it');

$mailSender->AddReplyTo("info@polleg.it","Polleg.it");

$address = $mail;
$mailSender->AddAddress("riccardo.sibani@live.it", "Riccardo Sibani");

$mailSender->Subject    = "DA POLLEG";

$mailSender->AltBody    = "DA POLLEG"; // optional, comment out and test

$mailSender->MsgHTML($body);


if (!$mailSender->Send()) {
  echo "Message could not be sent. <p>";
  echo "Mailer Error: " . $mailSender->ErrorInfo;
  exit;
}

echo "Message has been sent";
?>



