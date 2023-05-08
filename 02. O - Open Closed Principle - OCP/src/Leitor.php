<?php

namespace src;

use src\Arquivo;

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

        $arquivo = new Arquivo();
        $arquivo->lerArquivoCSV($caminho);

        return $arquivo->getDados();
    }
}
