<?php

$idades = [10,15,30,40,18,25,33,36];
$soma = 0;
$maior18 = 0;

foreach ($idades as $idade) {
    $soma += $idade;

    if($idade >= 18){
        $maior18 += 1;
    
    }

}

$media = $soma / count($idades);

echo "Média das idades: " . $media . "<br>";
echo "Pessoas com 18 anos ou mais: " . $maior18;
?>





