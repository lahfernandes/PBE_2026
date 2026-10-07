<?php

class Carro
{
    private $modelo;
    private $consumo;
    private $tanque;

    public function __construct($modelo, $consumo = 10, $tanqueInicial = 0){
        $this->modelo = $modelo;
        $this->consumo = $consumo;
        $this->tanque = $tanqueInicial;
    }

    public function abastecer($litros){
        if ($litros > 0) {
            $this->tanque += $litros;

            echo "Abastecimento realizado com sucesso!<br>";
            echo "Quantidade abastecida: " . $litros . " litros<br>";

        } else {
            echo "Erro: a quantidade de combustível deve ser positiva.<br>";
        }
    }

    public function dirigir($km){
        $combustivelNecessario = $km / $this->consumo;
        if ($combustivelNecessario <= $this->tanque) {
            $this->tanque -= $combustivelNecessario;

            echo "Viagem realizada com sucesso!<br>";
            echo "Distância percorrida: " . $km . " km<br>";
            echo "Combustível utilizado: "
                . number_format($combustivelNecessario, 2, ',', '.')
                . " litros<br>";

        } else {

            echo "Não é possível percorrer " . $km . " km.<br>";
            echo "Combustível insuficiente.<br>";
        }
    }


    public function exibirInfo(){
        echo "Modelo: " . $this->modelo . "<br>";
        echo "Consumo: " . $this->consumo . " km/L<br>";
        echo "Combustível no tanque: "
            . number_format($this->tanque, 2, ',', '.')
            . " litros<br>";
    }
}

$carro = new Carro("Toyota Corolla");
$carro->exibirInfo();
echo "<br>";
$carro->abastecer(30);
echo "<br>";
$carro->dirigir(100);
echo "<br>";
$carro->exibirInfo();

?>

