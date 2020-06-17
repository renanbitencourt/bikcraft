<?php
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
require 'vendor/autoload.php'; // If you're using Composer (recommended)
// Comment out the above line if not using Composer
// require("./sendgrid-php.php");
// If not using Composer, uncomment the above line
$email = new \SendGrid\Mail\Mail();
$email->setFrom("biten.renan@gmail.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("biten.renan@gmail.com", "Example User");
$email->addContent(
    "text/plain", "and easy to do anywhere, even with PHP"
);
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid('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');
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
echo 'Caught exception: ';
// require("./sendgrid-php/vendor/autoload.php");

// $email_site = "biten.renan@gmail.com";
// $nome_site = "Bikcraft";

// $email_user = $_POST["email"];
// $nome_user = $_POST["nome"];

// $body_content = "";
// foreach( $_POST as $field => $value) {
//   if( $field !== "leaveblank" && $field !== "dontchange" && $field !== "enviar") {
//     $sanitize_value = filter_var($value, FILTER_SANITIZE_STRING);
//     $body_content .= "$field: $value \n";
//   }
// }

// $email = new \SendGrid\Mail\Mail(); 
// $email->setFrom($email_site, $nome_site);
// $email->addTo($email_site, $nome_site);

// $email->setReplyTo($email_user, $nome_user);

// $email->setSubject("Formulário Bikcraft");
// $email->addContent("text/plain", $body_content);

// $sendgrid = new \SendGrid("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");
// try {
//     $response = $sendgrid->send($email);
//     print $response->statusCode() . "\n";
//     print_r($response->headers());
//     print $response->body() . "\n";
// } catch (Exception $e) {
//     echo "Caught exception: ". $e->getMessage() ."\n";
// }

?>