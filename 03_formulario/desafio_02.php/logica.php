<?php
$nome_cliente = $_POST['nome_cliente'];
$nome_produto1 = $_POST['nome_produto1'];
$preco1 = $_POST['preco1'];
$quantidade1 = $_POST['quantidade1'];

$nome_produto2 = $_POST['nome_produto2'];
$preco2 = $_POST['preco2'];
$quantidade2 = $_POST['quantidade2'];

$nome_produto3 = $_POST['nome_produto3'];
$preco3 = $_POST['preco3'];
$quantidade3 = $_POST['quantidade3'];

$produtos = [
    ["nome" => $nome_produto1,
    'preco' => $preco1,
    'quantidade' => $quantidade1,
    'subtotal' => $preco1 * $quantidade1],

    ["nome" => $nome_produto2, 'preco' => $preco2, 'quantidade' => $quantidade2, 'subtotal' => $preco2 * $quantidade2],
    ["nome" => $nome_produto3, 'preco' => $preco3, 'quantidade' => $quantidade3, 'subtotal' => $preco3 * $quantidade3]

];
$total = 0;
foreach ($produtos as $produto){
    $total += $produto['subtotal'];
}
$desconto = 0;
if($total > 500){
    $desconto = 10;
}
$valorDesconto = $total * ($desconto/100);
$total = $total - $valorDesconto;
require_once 'view_relatorio.php';

?>