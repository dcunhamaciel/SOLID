<?php

namespace src;

use src\IMensagemToken;

class Sms implements IMensagemToken
{
    public function enviar(): void
    {
        echo 'SMS: Seu token é 888-222';
    }
}
