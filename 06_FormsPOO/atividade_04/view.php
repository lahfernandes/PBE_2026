<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Matrícula PowerFit</title>
</head>
<body>
    <h1>Matrícula na Academia</h1>

    <form action="logica.php" method="POST">
        <h2>Dados do aluno</h2>

        <label>Nome:</label>
        <input type="text" name="nome" required>

        <br><br>

        <label>Peso (kg):</label>
        <input type="number" name="peso" step="0.1" min="0.1" required>

        <br><br>

        <label>Altura (m):</label>
        <input type="number" name="altura" step="0.01" min="0.01" required>

        <h2>Dados da matrícula</h2>

        <label>Plano:</label>
        <select name="plano" required>
            <option value="">Selecione</option>
            <option value="Básico">Básico</option>
            <option value="Plus">Plus</option>
            <option value="Premium">Premium</option>
        </select>

        <br><br>

        <label>Quantidade de meses:</label>
        <input type="number" name="meses" min="1" max="12" required>

        <h2>Modalidades extras</h2>

        <input type="checkbox" name="modalidades[]" value="Natação">
        Natação - R$ 60,00

        <br>

        <input type="checkbox" name="modalidades[]" value="Funcional">
        Funcional - R$ 40,00

        <br>

        <input type="checkbox" name="modalidades[]" value="Lutas">
        Lutas - R$ 50,00

        <br><br>

        <button type="submit">Gerar Matrícula</button>
    </form>
</body>
</html>
