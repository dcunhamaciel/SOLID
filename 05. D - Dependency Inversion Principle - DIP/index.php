<?php

require __DIR__ . "/vendor/autoload.php";

use src\Mensageiro;
use src\Email;
use src\Sms;

$msgEmail = new Mensageiro(new Email());
$msgEmail->enviarToken();

echo '<br>';

$msgSms = new Mensageiro(new Sms());
$msgSms->enviarToken();
