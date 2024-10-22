<?php

interface Veiculo
{
    public function ligar();
    public function desligar();
}

class Carro implements Veiculo
{
    public function ligar()
    {
        return "Carro ligado";
    }

    public function desligar()
    {
        return "Carro desligado";
    }
}

$carro = new Carro();

echo $carro->ligar();

echo $carro->desligar();
