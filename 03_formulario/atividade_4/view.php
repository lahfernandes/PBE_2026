<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>atividade_4</title>
</head>

<body>
    <h1>Calcular Média do Aluno</h1>
    <form action="logica.php" method="post">
        <label for="">Nome do aluno:</label><br>
        <input type="text" name="nome_completo">
        <br><br>

        <label for="">Nota 1 :</label><br>
        <input type="number" name="nota1" step = "0.1">
        <br><br>

         <label for="">Nota 2:</label><br>
        <input type="number" name="nota2" step = "0.1">
        <br><br>

        <label for="">Nota 3:</label><br>
        <input type="number" name="nota3" step = "0.1">
        <br><br>

        <br>
        <button type="submit">Calcular Média</button>
    
    </form>  
</body>
</html>