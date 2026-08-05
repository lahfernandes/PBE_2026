<?php

$alunos = [
    "Roberto" => 7.0,
    "Maria" => 9.5,
    "João" => 8.0,
    "Ana" => 6.5
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
