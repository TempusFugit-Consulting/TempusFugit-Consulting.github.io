<?php
$recipient      = "josua.hess@icloud.com";
$given_name     = (isset($_POST['given-name'])) ? htmlspecialchars($_POST['given-name']) : '';
$family_name    = (isset($_POST['family-name'])) ? htmlspecialchars($_POST['family-name']) : '';
$tel            = (isset($_POST['tel'])) ? htmlspecialchars($_POST['tel']) : '';
$email          = (isset($_POST['email'])) ? htmlspecialchars($_POST['email']) : '';
$organization   = (isset($_POST['organization'])) ? htmlspecialchars($_POST['organization']) : '';
$address_line1  = (isset($_POST['address-line1'])) ? htmlspecialchars($_POST['address-line1']) : '';
$postal_code    = (isset($_POST['postal-code'])) ? htmlspecialchars($_POST['postal-code']) : '';
$address_level2 = (isset($_POST['address-level2'])) ? htmlspecialchars($_POST['address-level2']) : '';
$message        = (isset($_POST['message'])) ? htmlspecialchars($_POST['message']) : '';
$subject        = (isset($_POST['subject'])) ? htmlspecialchars($_POST['subject']) : '';

$antwortweg = '';
if ($wegja == 'Ja') {
  $antwortweg = 'Ja';
} elseif ($wegnein == 'Nein') {
  $antwortweg = 'Nein';
}
// Nachrichteninhalt der E-Mail
$content = "
<html>
<head>
  <title>Kontaktanfrage von $given_name $family_name</title>
  <style>
    /* Hier können Sie Ihre CSS-Styles einfügen */
  </style>
</head>
<body>
  <h1>Kontaktanfrage von $given_name $family_name</h1>
  <p><strong>Firma:</strong> $organization<br>
  <strong>Vorname:</strong> $given_name<br>
  <strong>Nachname:</strong> $family_name<br>
  <strong>Telefon:</strong> $tel<br>
  <strong>E-Mail:</strong> $email<br>
  <strong>Straße/Nr.:</strong> $address_line1<br>
  <strong>Postleitzahl:</strong> $postal_code<br>
  <strong>Ort:</strong> $address_level2</p>
  <p><strong>Nachricht:</strong><br> $message</p>
</body>
</html>
";

$mailheader = array(
  'From' => "Kontaktformular - Treske Baum- & Landschaftspflege GmbH" . " <noreply@baum-treske.de>",
  'Reply-To' => $email,
  'Content-Type' => 'text/html;charset=UTF-8',
);

if (mail($recipient, $subject, $content, $mailheader)) {
  http_response_code(200);
  header("Location: /kontakt/gesendet.php");
} else {
  http_response_code(500);
  header("Location: /kontakt/fehler.php");
}