<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>atividade_6</title>
</head>
<body>
    <h1>Calcular IMC</h1>
    <form action="logica.php" method="POST">
        <label for="">Nome do Cliente</label>
        <br>
        <input type="text" name="nome">
        <br><br>

        <label for="">Filme:</label>
        <br>
        <input type="text" name="filme">
        <br><br>
        
         <label for="">Quantidade de ingressos:</label>
        <br>
        <input type="number" name="qtd_ingresso">
        <h2>Tipo de Ingresso</h2>
        <input type="radio" name="tipo" value="inteira">
        <label for="">Inteira</label><br>
        <input type="radio" name="tipo" value="meia">
        <label for="">Meia</label><br>
        <br>
        <button type="submit">Comprar Ingressos</button>
    </form>
    
</body>
</html>