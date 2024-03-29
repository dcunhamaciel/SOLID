<?php

namespace src;

use src\extrator\Arquivo;

class Leitor
{
    private $diretorio;
    private $arquivo;

    public function getDiretorio(): string
    {
        return $this->diretorio;
    }

    public function getArquivo(): string
    {
        return $this->arquivo;
    }

    public function setDiretorio(string $diretorio)
    {
        $this->diretorio = $diretorio;
    }

    public function setArquivo(string $arquivo)
    {
        $this->arquivo = $arquivo;
    }

    public function lerArquivo(): array
    {
        $caminho = $this->getDiretorio() . '/' . $this->getArquivo();
        $extensao = explode('.', $this->getArquivo());

        $classe = '\src\extrator\\Arquivo' . ucfirst($extensao[1]);
        
        return call_user_func_array([new $classe, 'lerArquivo'], [$caminho]);
    }
}
