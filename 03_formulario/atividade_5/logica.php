<?php
$nome = $_POST['nome'];
$peso_em_kg = $_POST['peso_em_kg'];
$altura_em_metros = $_POST['altura_em_metros'];

$altura_em_metros = $altura_em_metros * 100;

$imc = ($altura_em_metros + $altura_em_metros)/$peso_em_kg;

require_once "view_relatorio.php";
?>