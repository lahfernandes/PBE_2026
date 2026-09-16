<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <h2>Calculadora</h2>
</head>
<body>
    <form action="logica.php" method="POST">
        <label for="">Primeiro Número:</label>
        <input type="number" name="Primeiro Número">
        <br><hr>

        <label for="">Segundo Número:</label>
        <input type="number" name="Segundo Número">
        <br><hr>

        <select name="operacao" required>
    <option value="">Selecione uma operação</option>
    <option value="+">Soma</option>
    <option value="-">Subtração</option>
    <option value="*">Multiplicação</option>
    <option value="/">Divisão</option>
</select>
<br><br>
        
        <button type="submit">Calcular</button>
</form>
</body>
</html>
