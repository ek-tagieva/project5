<?php
require_once '../vendor/autoload.php';


// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername('eka463752@gmail.com')
    ->setPassword('bciu onjr addq elbc')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
    ->setFrom(['eka463752@gmail.com' => 'Eka'])
    ->setTo(['ek.f0kinaa@gmail.com'])
    ->setBody('Here is the message itself')
;

// Send the message
$result = $mailer->send($message);
var_dump($result);

