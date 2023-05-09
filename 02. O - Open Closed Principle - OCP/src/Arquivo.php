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

        fclose($handle);
    }

    public function lerArquivoTXT(string $caminho)
    {
        $handle = fopen($caminho, 'r');

        while (!feof($handle)) {
            $linha = fgets($handle);           
            
            $this->setDados(substr($linha, 11, 30), substr($linha, 0, 11), substr($linha, 41, 50));
        }

        fclose($handle);
    }    
}
