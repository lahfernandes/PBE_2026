<?php

function verificarMaioridade($idade)
{
    if ($idade >= 18) {
        return "Maior de idade";
    } else {
        return "Menor de idade";
    }
}

$resultado1 = verificarMaioridade(15);
$resultado2 = verificarMaioridade(18);
$resultado3 = verificarMaioridade(25);

echo "15 anos: " . $resultado1 . "<br>";
echo "18 anos: " . $resultado2 . "<br>";
echo "25 anos: " . $resultado3 . "<br>";

?>
