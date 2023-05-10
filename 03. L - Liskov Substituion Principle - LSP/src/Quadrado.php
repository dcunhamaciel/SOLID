<?php

namespace src;

use src\Retangulo;

class Quadrado extends Retangulo
{
    public function setLargura(float $largura)
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function setAltura(float $altura)
    {
        $this->altura = $altura;
        $this->largura = $altura;
    }
}
