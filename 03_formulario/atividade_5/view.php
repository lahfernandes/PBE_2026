<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>atividade_5</title>
</head>

<body>
    <h1>Calcular IMC</h1>
    <form action="logica.php" method="post">
        <label for="">Nome:</label><br>
        <input type="text" name="nome">
        <br><br>

        <label for="">Peso em kg :</label><br>
        <input type="number" name="peso_em_kg" step = "0.1">
        <br><br>

         <label for="">Altura em metros:</label><br>
        <input type="number" name="altura_em_metros" step = "0.1">
        <br><br>

        <br>
        <button type="submit">Calcular IMC</button>
    
    </form>  
</body>
</html>