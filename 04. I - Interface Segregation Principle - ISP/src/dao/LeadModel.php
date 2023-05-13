<?php

namespace src\dao;

use src\BD;
use src\componentes\Log;
use src\interfaces\ILog;
use src\interfaces\ICadastro;

class LeadModel extends BD implements ICadastro, ILog
{
    public function salvar()
    {

    }

    public function registrarLog(Log $log)
    {
    }
}
