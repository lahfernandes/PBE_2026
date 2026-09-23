<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>desafio_03.php</title>
</head>
<body>
    <img src="logo.png" width= "5%">
    <h1>10% De Desconto<h1>
    <h2>Filmes Disponíveis</h2>
    <form action="logica.php" method="POST">
        <br>
        <p>Diário de Uma Paixão</p>
        <img src="https://m.media-amazon.com/images/M/MV5BZjY0YzYwMDQtYmJjNi00Yzg5LWE3OTYtNDQzOGYxN2JiNGQ4XkEyXkFqcGc@._V1_.jpg" width= "10%">
        <br><br>
        <input type="radio" name="tipo" value="paixao">
        <br><br>
        <p>Como eu era Antes de você</p>
        <img src="https://br.web.img3.acsta.net/c_310_420/pictures/16/02/03/19/11/303307.jpg" width= "10%">
        <br><br>
        <input type="radio" name="tipo" value="antes">
        <br><br>
        <p>Telefone preto</p>
        <img src="https://m.media-amazon.com/images/S/pv-target-images/594cd6c2c681c0d3800cb63c96909c210af3e95d239fa3d2c737c92c27a4c5ee._UR2000,3000_.png" width= "10%">
        <br><br>
        <input type="radio" name="tipo" value="telefone">
        <br><br>
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
        <br><br>
        <button type="submit">Comprar Ingressos</button>
    </form>
    
</body>
</html>