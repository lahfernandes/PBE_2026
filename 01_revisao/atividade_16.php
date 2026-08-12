<?php
$produtos = [
    ["nome" => "Mouse", "quantidade" => 10],
    ["nome" => "Notebook", "quantidade" => 2],
    ["nome" => "Monitor", "quantidade" => 0],
    ["nome" => "Teclado", "quantidade" => 15],
    ["nome" => "Headset", "quantidade" => 0],
    ["nome" => "Webcam", "quantidade" => 5]
];

$totalprodutos = count($produtos);
$semestoque = 0;

foreach ($produtos as $produto) {
    echo "Produto: " . $produto["nome"] . " - ";
    if ($produto["quantidade"] == 0) {
        echo "Sem estoque " . "</br>";
        $semestoque++;
    } else {
        echo "Quantidade: " . $produto["quantidade"] . "</br>";
    }
}

echo "Total de produtos cadastrados: $totalprodutos " . "</br>";
echo "Produtos sem estoque: $semestoque " . "</br>";
?>