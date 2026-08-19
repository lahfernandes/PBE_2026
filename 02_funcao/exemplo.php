<?php

$frequencia = 90;
$media1 = 9;

echo "Lavínia - ";
if($frequencia < 75) { // Frequência insuficiente
    echo "Reprovado por falta";

}
elseif ($media1 >= 7){ // Maior que 7 aprovado
    echo "Aprovado";

}
elseif ($media1 >= 5){ // Nota: entre 5 e 6.9 = recuperação
    echo "Recuperação";

}
else{ // Media insuficiente reprovado
    echo "Reprovado";

}
?>


