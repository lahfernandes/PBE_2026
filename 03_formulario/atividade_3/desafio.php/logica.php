<?php
    $salario_bruto_sem_desconto=0;
    $salario_liquido=0;

    $nome=$_POST['nome'];
    $salario_bruto_sem_desconto=$_POST['salario_bruto'];
    $hora_extra=$_POST['hora_extra'];
    $beneficio=$_POST['beneficio'];
    $desconto=$_POST['desconto'];



echo("Nome: $nome <br>");
echo("Salário Bruto: R$ $salario_bruto_sem_desconto <br>");

$valor_hora=$salario_bruto_sem_desconto/160;
$valor_hora_extra=$valor_hora*1.5;
$total_horas_extras=$hora_extra*$valor_hora_extra;
echo("Salário Bruto + Total com horas extras + Benefícios: R$ $total_horas_extras <br>");

echo("Descontos: R$ $desconto <br>");

if ($salario_bruto_sem_desconto >= 5000){
    $desconto=$salario_bruto_sem_desconto * 10/100;
    $salario_bruto_com_desconto = $salario_bruto_sem_desconto - $desconto;
    echo("Imposto Aplicado: R$ $salario_bruto_com_desconto");
}else if ($salario_bruto_sem_desconto >= 3000){
    $desconto=$salario_bruto_sem_desconto * 5/100;
    $salario_bruto_com_desconto = $salario_bruto_sem_desconto - $desconto;
    echo("Imposto Aplicado: R$ $salario_bruto_com_desconto <br>");
}else{
    echo("Insento de imposto aplicado <br>");
}

$salario_liquido=($salario_bruto_sem_desconto+$hora_extra+$beneficio)-$desconto;
echo("Salário Liquido: R$ $salario_liquido <br>");

if($salario_liquido >= 4000){
    echo("Status:Bem remunerado");
}else{
    echo("Status:Médio");
}
?>