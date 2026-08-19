<?php
function analisarNumero($numero){
    $dobro = $numero * 2;
    $triplo = $numero * 3;
    $quadrado = $numero ** 2;

    if($numero >= 0){
        $situacao = "positivo";
    }
    else{
        $situacao = "negativo";
    }
    return [
        "Número" => $numero,
        "Dobro" => $dobro,
        "Triplo" => $triplo,
        "Quadrado" => $quadrado,
        "Situação" => $situacao
    ];
}

$resultado = analisarNumero(5);
echo "Número: ".$resultado["Número"]."<br>";
echo "Dobro: ".$resultado["Dobro"]."<br>";
echo "Triplo: ".$resultado["Triplo"]."<br>";
echo "Quadrado: ".$resultado["Quadrado"]."<br>";
echo "Situação: ".$resultado["Situação"]."<br>";

?>