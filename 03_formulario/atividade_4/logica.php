<?php
$nome_completo = $_POST['nome_completo'];
$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];

$media = ($nota1 + $nota2 + $nota3)/3;

if($media > 10){
    $media = 10;
}

require_once "view_relatorio.php";
?>