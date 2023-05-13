<?php

require __DIR__ . "/vendor/autoload.php";

use src\Mensageiro;

$msgEmail = new Mensageiro();
$msgEmail->setCanal('email');
$msgEmail->enviarToken();

echo '<br>';

$msgSms = new Mensageiro();
$msgSms->setCanal('sms');
$msgSms->enviarToken();
