<?php 

class Celular{
public $marca;
public $modelo;
public $cor;
public $bateria;
public $ligado;

function ligar(){
    $this->ligado = true;
    echo "O celular foi ligado <br>";
}
function desligar(){
    $this->desligado = true;
    echo "O celular foi desligado <br>";
}
function usar($consumir){
    $this->bateria = $this->bateria - $consumir;
    if($this->bateria<0){
        $this->bateria = 0;
    }
    echo"A bateria foi consumida em $comsumir<br>";
    echo"Sobrando um total de $this->bateria <br>";
}
function carregar($carga){
    $this->bateria = $this->bateria + $carga;
    if($this->bateria > 100){
        $this->bateria= 100;
}
    echo"A bateria foi CARREGADA em $carga<br>";
    echo"Aumentando a bateria para $this->bateria <br>";
    }
}
$celular1 = new Celular();

$celular1->marca = "Motorola";
$celular1->modelo = "Modelo";
$celular1->cor = "Rosa";
$celular1->bateria = 50;
$celular1->ligado = true;

echo "Marca: $celular1->marca <br>";
echo "Modelo: $celular1->modelo <br>";
echo "Rosa: $celular1->cor <br>";
echo "Bateria: $celular1->bateria <br>";
echo "Ligado: $celular1->ligado <br>";

$celular1->carregar(33);
$celular1->carregar(12);
$celular1->carregar(25);
$celular1->desligar();
?>