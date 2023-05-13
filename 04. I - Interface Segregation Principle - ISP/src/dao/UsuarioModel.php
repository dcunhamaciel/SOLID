<?php

namespace src\dao;

use src\BD;
use src\componentes\Notificacao;
use src\componentes\Log;
use src\interfaces\INotificacao;
use src\interfaces\ILog;

class UsuarioModel extends BD implements INotificacao, ILog
{
    public function enviarNotificacao(Notificacao $notificacao)
    {
    }

    public function registrarLog(Log $log)
    {
    }
}
