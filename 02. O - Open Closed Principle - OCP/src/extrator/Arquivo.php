<?php

namespace src\extrator;

class Arquivo
{
    private $dados = array();

    public function getDados(): array
    {
        return $this->dados;
    }

    public function setDados(string $nome, string $cpf, string $e_mail): void 
    {
        array_push($this->dados, [
            'nome' => $nome,
            'cpf' => $cpf,
            'e_mail' => $e_mail
        ]);
    }
}
