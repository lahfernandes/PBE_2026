<?php

require_once "Aluno.php";
require_once "Matricula.php";

$nome = $_POST['nome'];
$peso = $_POST['peso'];
$altura = $_POST['altura'] ?? 0;
$plano = $_POST['plano'];
$meses = $_POST['meses'];

$modalidades = $_POST['modalidades'] ?? [];
$aluno = new Aluno($nome, $peso, $altura);
$matricula = new Matricula($aluno, $plano, $meses, $modalidades);
require_once "view_relatorio.php";

?>