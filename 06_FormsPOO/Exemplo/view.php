<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO com PHP</title>
</head>
<body>
    <form action="logica.php" method="POST">
        <label for="">Nome:</label>
        <input type="text" name="nome">
        <br>
        <label for="">Quantidade:</label>
        <input type="number" name="quantidade">
        <br>
        <label for="">Preço:</label>
        <input type="number" name="preco" step="0.01">
        <button type="submit">Cadastrar</button>
</form>
</body>
</html>