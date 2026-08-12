<?php

$usuarios = [
    ["nome" => "Carlos", "cargo" => "Programador", "salario" => 500 ],
    ["nome" => "Ana", "cargo" => "Designer", "salario" => 3500 ],
    ["nome" => "Pedro", "cargo" => "Analista", "salario" => 3000 ],
    ["nome" => "Marina", "cargo" => "Gerente", "salario" => 1500 ],
    ["nome" => "João", "cargo" => "Suporte", "salario" => 1000 ],
    ["nome" => "Júlia", "cargo" => "Estagíaria", "salario" => 2000 ]
];

foreach ($usuarios as $usuario) {
    echo "Nome: {$usuario["nome"]}<br>";
    echo "Cargo: {$usuario["cargo"]}<br>";
    echo "Salário: {$usuario["salario"]}<br>";
    echo str_repeat("-", 50)."<br>";


}
?>