<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio 01</title>
</head>

<body>
    <h1>Calcular Salário</h1>
    <form action="logica.php" method="post">
        <label for="">Nome:</label><br>
        <input type="text" name="nome">
        <br><br>

        <label for="">Salário Bruto :</label><br>
        <input type="number" name="salario_bruto">
        <br><br>

         <label for="">Horas extras:</label><br>
        <input type="number" name="hora_extra">
        <br><br>

        <label for="">Benefícios:</label><br>
        <input type="number" name="beneficio">
        <br><br>

        <label for="">Descontos:</label><br>
        <input type="number" name="desconto">
        <br><br>

        <button type="submit">Calcular salario</button>
    
    </form>  
</body>
</html>