<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Contrato de Matrícula</title>
</head>
<body>

    <h1>Contrato de Matrícula</h1>

    <h2>Dados do aluno</h2>

    <p>Nome: <?= $matricula->getAluno()->getNome() ?></p>

    <p>IMC: <?= number_format($matricula->getAluno()->calcularIMC())?></p>

    <p>Classificação: <?= $matricula->getAluno()->classificarIMC() ?></p>

    <h2>Mensalidade</h2>

    <table border="1">
        <tr>
            <th>Descrição</th>
            <th>Valor</th>
        </tr>

        <tr>
            <td>Plano <?= $matricula->getPlano() ?></td>
            <td>R$ <?= number_format(
                $matricula->calcularValorPlano(), 2, ',', '.'
            ) ?></td>
        </tr>

        <?php foreach ($matricula->getModalidades() as $modalidade) { ?>
            <tr>
                <td><?= $modalidade ?></td>
                <td>R$ <?= number_format(
                    $matricula->calcularValorModalidade($modalidade),
                    2, ',', '.'
                ) ?></td>
            </tr>
        <?php } ?>

        <tr>
            <th>Mensalidade total</th>
            <th>R$ <?= number_format(
                $matricula->calcularMensalidade(), 2, ',', '.'
            ) ?></th>
        </tr>
    </table>

    <h2>Resumo do contrato</h2>

    <p>Meses: <?= $matricula->getMeses() ?></p>

    <p>Subtotal: R$ <?= number_format(
        $matricula->calcularSubtotal(), 2, ',', '.'
    ) ?></p>

    <p>Desconto (<?= $matricula->calcularPercentualDesconto() ?>%):
        R$ <?= number_format(
            $matricula->calcularDesconto(), 2, ',', '.'
        ) ?>
    </p>

    <h2>Total do contrato: R$
        <?= number_format(
            $matricula->calcularTotal(), 2, ',', '.'
        ) ?>
    </h2>

    <?php if ($matricula->calcularPercentualDesconto() > 0) { ?>
        <p>Parabéns! Você ganhou
            <?= $matricula->calcularPercentualDesconto() ?>% de desconto.
        </p>
    <?php } else { ?>
        <p>Dica: fechando 6 meses ou mais você ganha desconto.</p>
    <?php } ?>

    <br>

    <a href="view.php">Voltar</a>

</body>
</html>
