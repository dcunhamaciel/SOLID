<?php

namespace src;

use src\IMensagemToken;

class Email implements IMensagemToken
{
    public function enviar(): void
    {
        echo 'E-mail: Seu token é 555-333';
    }
}
