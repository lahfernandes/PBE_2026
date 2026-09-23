<?php

$valor_ingresso = 25;

$tipo = $_POST['tipo'];
$nome_cliente = $_POST['nome'];
$filme = $_POST['filme'];
$qtd_ingresso = $_POST['qtd_ingresso'];

if ($tipo == "inteira") {
    $valor_ingresso = 25;

} elseif ($tipo == "meia") {
    $valor_ingresso = 25 / 2;

}
$valor_total = $valor_ingresso * $qtd_ingresso;

if ($qtd_ingresso > 10) {
    $valor_total = $valor_total - (10/100);
}

require_once "view_relatorio.php";

?>