<?php

namespace src;

class Poligono
{
    private $forma;

    public function getForma(): object
    {
        return $this->forma;
    }

    public function setForma(object $forma)
    {
        $this->forma = $forma;
    }

    public function getArea(): float
    {
        return $this->getForma()->getLargura() * $this->getForma()->getAltura();
    }
}
