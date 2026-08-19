<?php

function calcularPrecoFinal($preco, $quantidade, $desconto)
{
    $subtotal = $preco * $quantidade;
    $valorDesconto = $subtotal * ($desconto / 100);

    return $subtotal - $valorDesconto;
}

$precoFinal = calcularPrecoFinal(50, 3, 10);

echo "Preço final: R$ " . $precoFinal;

?>
