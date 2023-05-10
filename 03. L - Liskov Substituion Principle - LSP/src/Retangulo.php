<?php

namespace src;

class Retangulo
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
    }

    public function getAltura(): float
    {
        return $this->altura;
    }
    
    public function setAltura(float $altura)
    {
        $this->altura = $altura;
    }

    public function getArea(): float
    {
        return $this->getLargura() * $this->getAltura();
    }
}
