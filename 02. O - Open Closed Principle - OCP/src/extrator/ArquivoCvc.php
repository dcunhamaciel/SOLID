<?php

namespace src\extrator;

use src\extrator\Arquivo as ExtratorArquivo;

class ArquivoCvc extends ExtratorArquivo
{
    public function lerArquivo(string $caminho): array
    {
        $handle = fopen($caminho, 'r');

        while (!($linha = fgetcsv($handle, 10000, ';'))) {
            $this->setDados($linha[0], $linha[1], $linha[2]);
        }

        fclose($handle);

        return $this->getDados();
    }
}
