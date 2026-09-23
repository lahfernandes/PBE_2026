<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>desafio_02.php</title>
</head>

<body>
    <h1>Carrinho de Compras</h1>
    <h2>Dados do Cliente</h2>
    <form action="logica.php" method="post">
        <label for="">Nome:</label><br>
        <input type="text" name="nome_cliente">
        <br><br>
    <h2>Produto 1</h2>
    <form action="logica.php" method="post">
        <label for="">Nome do produto:</label><br>
        <input type="text" name="nome_produto1">
        <br><br>
    <form action="logica.php" method="post">
        <label for="">Preço:</label><br>
        <input type="number" name="preco1">
        <br><br>
    <form action="logica.php" method="post1">
        <label for="">Quantidade:</label><br>
        <input type="number" name="quantidade1">
        <br><br>
    <h2>Produto 2</h2>
    <form action="logica.php" method="post">
        <label for="">Nome do produto:</label><br>
        <input type="text" name="nome_produto2">
        <br><br>
    <form action="logica.php" method="post">
        <label for="">Preço:</label><br>
        <input type="number" name="preco2">
        <br><br>
    <form action="logica.php" method="post">
        <label for="">Quantidade:</label><br>
        <input type="number" name="quantidade2">
        <br><br>
        <h2>Produto 3</h2>
    <form action="logica.php" method="post">
        <label for="">Nome do produto:</label><br>
        <input type="text" name="nome_produto3">
        <br><br>
    <form action="logica.php" method="post">
        <label for="">Preço:</label><br>
        <input type="number" name="preco3">
        <br><br>
    <form action="logica.php" method="post">
        <label for="">Quantidade:</label><br>
        <input type="number" name="quantidade3">
        <br><br>
        <button type="submit">Finalizar Compra</button>