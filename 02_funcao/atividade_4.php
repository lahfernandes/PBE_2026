<?php

function analistarNotas($nota1, $nota2, $nota3)
{
    $media = ($nota1 + $nota2 + $nota3) / 3;

    $maior = max($nota1, $nota2, $nota3);
    $menor = min($nota1, $nota2, $nota3);

    if ($media >= 7) {
        $situacao ="Aprovado";

    } elseif ($media >= 5 && $media < 7) {
        $situacao = "Recuperação";

    } else {
        $situacao = "Reprovado"; 
    }

    return [
        "média" => $media,
        "maior" => $maior,
        "menor" => $menor,
        "situacao" => $situacao,

    ];
}

$resultado = analistarNotas(7, 5, 8);

echo "Média: " . $resultado["média"] . "<br>";
echo "Maior nota: " . $resultado["maior"] . "<br>";
echo "Menor nota: " . $resultado["menor"] . "<br>";
echo "situação: " . $resultado["situacao"];

?>
