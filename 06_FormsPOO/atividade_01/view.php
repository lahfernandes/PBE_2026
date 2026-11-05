<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO com PHP</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br>

        <label>Quantidade:</label>
        <input type="number" name="quantidade" required>
        <br>

        <label>Preço:</label>
        <input type="number" name="preco" step="0.01" required>
        <br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
