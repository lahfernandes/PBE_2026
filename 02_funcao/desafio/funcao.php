<?php
function calcularPedido ($nome,$quantidade,$preco, $desconto=0,$imposto=0){
    $subtotal = $preco*$quantidade;
    $valorDesconto = $subtotal*($desconto/100);
    $valorTotalComDesconto = $subtotal-$valorDesconto;
    $valorImposto = $valorTotalComDesconto *($imposto/100);
    $total = $valorTotalComDesconto+$valorImposto;

    return[
        "nomeProduto"=>$nome,
        "quantidade"=>$quantidade,
        "subtotal"=>$subtotal,
        "valorDesconto"=>$valorDesconto,
        "valorImposto"=>$valorImposto,
        "total"=>$total
    ];
}

function calculoFrete($valorTotal){
    $frete = $valorTotal * (10/100);
    $TotalComFrete = $frete + $valorTotal;
    return $TotalComFrete;

}
?>
