<?php

$num1 = 10;
$num2 = 5;
$operacao = "+";

switch ($operacao) {
    case "+":
        echo "Resultado: " . ($num1 + $num2);
        break;

    case "-":
        echo "Resultado: " . ($num1 - $num2);
        break;

    case "*":
        echo "Resultado: " . ($num1 * $num2);
        break;

    case "/":
        if ($num2 == 0) {
            echo "Erro: não é possível dividir por zero.";
        } else {
            echo "Resultado: " . ($num1 / $num2);
        }
        break;

    default:
        echo "Operação inválida.";
}
?>