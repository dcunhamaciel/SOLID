<?php

namespace src;

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

    public function lerArquivoCSV(string $caminho)
    {
        $handle = fopen($caminho, 'r');

        while (!($linha = fgetcsv($handle, 10000, ';'))) {
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }
    }
}
