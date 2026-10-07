<?php

class conta{
    //Atributos
    public $titular;
    public $numero;
    public $saldo;
    public $tipo;
    function depositar($valor){
        $this->saldo = $this->saldo + $valor;
        echo "O saldo aumentou para $this->saldo";
    }

    function sacar($valor){
        $this->saldo = $this->saldo - $valor;
        echo "Oslado resultou em $this->saldo";
    }

    function consultarSaldo(){
        echo "O valor do saldo é de $this->saldo";
    }
}

$conta1= new Conta();

$conta1->titular = "Jhenyffer";
$conta1->numero= 199897234;
$conta1->saldo = 100000000;
$conta1->tipo = "Conta Corrente";

echo "Titular: " . $conta1->titular . "<br>";
echo "Numero: " . $conta1->numero . "<br>";
echo "Saldo: " . $conta1->saldo . "<br>";
echo "Tipo: " . $conta1->tipo . "<br>";

$conta1->depositar(100);
$conta1->sacar(500);
$conta1->consultarSaldo(300);


$conta2= new Conta();

$conta2->titular = "Matheus";
$conta2->numero= 19789061;
$conta2->saldo = 200000000;
$conta2->tipo = "Conta Corrente";

echo "Titular: " . $conta2->titular . "<br>";
echo "Numero: " . $conta2->numero . "<br>";
echo "Saldo: " . $conta2->saldo . "<br>";
echo "Tipo: " . $conta2->tipo . "<br>";

$conta2->depositar(300);
$conta2->sacar(1000);
$conta2->consultarSaldo(700);





