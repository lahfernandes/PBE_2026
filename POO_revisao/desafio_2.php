<?php

class Carro {

    private $modelo;
    private $velocidade;

   
    public function __construct($modelo) {
        $this->modelo = $modelo;
        $this->velocidade = 0;
    }

    
    public function acelerar() {
        $this->velocidade += 10;
    }

    public function frear() {
        if ($this->velocidade >= 10) {
            $this->velocidade -= 10;
        }
    }

 
    public function verVelocidade() {
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Velocidade: " . $this->velocidade . " km/h<br>";
    }
}

$carro = new carro("nivus", 10);

$carro->verVelocidade();

$carro->acelerar();
$carro->acelerar();
$carro->verVelocidade();

$carro->frear();
$carro->verVelocidade();
?>
