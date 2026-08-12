<?php

$produtos = [
   [ "objeto" => "Mouse", "preco" => 50],
    ["objeto" => "Carregador", "preco" => 25],
   [ "objeto" => "Mousepad", "preco" => 15],
    ["objeto" => "Estação Espacial Internacional (ISS)", "preco" => "US$150,00B"]
];

foreach( $produtos as $produto){
    if ($produto["preco"] < 100){
         echo "Produto:". $produto["objeto"] . "   - Preço:" . $produto["preco"];
    echo "<br>";
    }

}

?>