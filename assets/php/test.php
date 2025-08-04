<?php
$to = "info@bumsinc.net";
$from = "aldrin_tech2000@yahoo.com";
$subject = "Hi!";
$body = "Hi,\n\nHi This is a test mail.";
if (mail($to, $subject, $body,"From: $from")) {
echo("<p>Message successfully sent!</p>");
} else {
echo("<p>Message delivery failed...</p>");
}
?>

