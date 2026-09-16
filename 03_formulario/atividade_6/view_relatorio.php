<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório</title>
</head>

<body>

    <h1>Compra de Ingressos</h1>
    <p><strong>Nome:</strong> <?= $nome ?></p>
    <p><strong>Filme:</strong> <?= $filme ?></p>
    <p><strong>Quantidade de ingressos:</strong> <?= $quantidade ?></p>
    <p><strong>Tipo de ingresso:</strong> <?= $tipo ?></p>
    <p><strong>Valor total:</strong> R$ <?= $total ?></p>

    <?php
    if ($quantidade > 10) {
        echo "<h2>Você recebeu 10% de desconto!</h2>";
    }
    ?>
</body>
</html>