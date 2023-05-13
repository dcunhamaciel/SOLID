<?php

namespace src\dao;

use src\BD;
use src\componentes\Log;
use src\componentes\Notificacao;
use src\interfaces\ICadastro;

class ContratoModel extends BD implements ICadastro
{
    public function salvar()
    {
    }

    public function registrarLog(Log $log)
    {
    }

    public function enviarNotificacao(Notificacao $notificacao)
    {
    }
}
