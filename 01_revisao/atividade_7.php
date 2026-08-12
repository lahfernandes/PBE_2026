<?php

$alunos = [
    "Ana" => 8.5,
    "Bruno" => 7.0,
    "Carla" => 9.2,
    "Roberto" => 6.8,
    "Eduardo"=> 8.0
];

$soma = 0;
$total = count($alunos);

foreach ($alunos as $nome => $nota) {
    echo "O aluno $nome tirou nota $nota.<br>";
    $soma += $nota;
}

$media = $soma / $total;

echo "<br>Média da turma: " . $media;

?>
