<?php
require_once "funcao.php";

$resultado = calcularPedido("Mouse",100,10,5,7);
echo"Produto: ".$resultado["nomeProduto"]."<br>";
echo"Subtotal: R$".$resultado["subtotal"]."<br>";
echo"Desconto: R$".$resultado["valorDesconto"]."<br>";
echo"Imposto: R$".$resultado["valorImposto"]."<br>";
echo"Valor final: R$".$resultado["total"]."<br>";

$TotalComFrete = calculoFrete($resultado['total']);
echo "Total com Frete". $TotalComFrete; 
?>