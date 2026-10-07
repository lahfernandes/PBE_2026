<?php

class Funcionario
{
    private $nome;
    private $salario;

    public function __construct($nome, $salario = 1000){
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function aumentarSalario($percentual){
        if ($percentual > 0 && $percentual <= 10) {
            $aumento = $this->salario * ($percentual / 100);
            $this->salario += $aumento;

        } else {
            echo "Erro: o percentual deve ser maior que 0 e menor ou igual a 10.<br>";
        }
    }

    public function exibirSalario(){
        echo "Funcionário: " . $this->nome . "<br>";
        echo "Salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
    }
}

$funcionario = new Funcionario("Lavínia", 2000);
$funcionario->aumentarSalario(10);
$funcionario->exibirSalario();
?>

