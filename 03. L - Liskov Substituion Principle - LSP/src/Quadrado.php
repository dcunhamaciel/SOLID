<?php

namespace src;

class Quadrado
{
    protected $largura;
    protected $altura;

    public function getLargura(): float
    {
        return $this->largura ;
    }

    public function setLargura(float $largura)
    {
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function getAltura(): float
    {
        return $this->altura;
    }

    public function setAltura(float $altura)
    {
        $this->altura = $altura;
        $this->largura = $altura;
    }
}
