<?php
/*
    ============================================================
    CINEPLAY - PÁGINA PRINCIPAL
    ============================================================
    Esta página apresenta:
    - Logo do CinePlay
    - Catálogo de filmes
    - Pesquisa
    - Filtro por gênero
    - Escolha do filme
    - Dados do cliente
    - Tipo de ingresso
    - Quantidade
    - Sessão
    - Sala
    - Combos
    - Forma de pagamento
*/

session_start();

/*
    Importamos a lógica para utilizar o catálogo de filmes.
    Como não é um POST, o logica.php não realizará nenhuma compra.
*/
require_once "logica.php";

/*
    Verifica se existe alguma mensagem de erro.
*/
$erro = $_SESSION["erro"] ?? "";

unset($_SESSION["erro"]);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">

    <title>CinePlay | Cinema</title>

    <style>

        /* =====================================================
           CONFIGURAÇÕES GERAIS
        ===================================================== */

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fc;
            color: #25283d;
        }

        button,
        input,
        select {
            font-family: inherit;
        }

        /* =====================================================
           CABEÇALHO
        ===================================================== */

        header {
            background: linear-gradient(
                135deg,
                #ffffff,
                #fff3f8,
                #eef7ff
            );

            border-bottom: 1px solid #e5e7ef;

            position: sticky;
            top: 0;

            z-index: 100;
        }

        .navbar {
            max-width: 1200px;
            margin: auto;

            min-height: 85px;

            display: flex;
            align-items: center;
            justify-content: space-between;

            padding: 10px 25px;

            gap: 20px;
        }

        /* Logo */

        .logo {
            width: 150px;
            height: 65px;

            object-fit: contain;

            border-radius: 12px;
        }

        /* Menu */

        .menu {
            display: flex;
            gap: 30px;

            font-weight: bold;
        }

        .menu a {
            text-decoration: none;
            color: #4e536b;

            transition: 0.3s;
        }

        .menu a:hover {
            color: #f0447b;
        }

        /* Promoção */

        .promocao {
            background: linear-gradient(
                90deg,
                #ff8a00,
                #f0447b
            );

            color: white;

            padding: 10px 18px;

            border-radius: 30px;

            font-weight: bold;

            box-shadow:
                0 8px 20px rgba(240, 68, 123, 0.25);
        }

        /* =====================================================
           BANNER
        ===================================================== */

        .hero {

            background:
                linear-gradient(
                    120deg,
                    #fff1d7,
                    #ffe7f1,
                    #e6f5ff
                );

            padding: 70px 25px;
        }

        .hero-container {

            max-width: 1200px;

            margin: auto;

            display: grid;

            grid-template-columns:
                1.5fr 1fr;

            gap: 40px;

            align-items: center;
        }

        .tag {

            color: #f0447b;

            font-weight: bold;

            letter-spacing: 2px;

            text-transform: uppercase;

            font-size: 13px;
        }

        .hero h1 {

            font-size:
                clamp(40px, 6vw, 70px);

            line-height: 1;

            margin: 15px 0;
        }

        .gradient-text {

            background:
                linear-gradient(
                    90deg,
                    #ff8a00,
                    #f0447b,
                    #884cff
                );

            -webkit-background-clip: text;

            color: transparent;
        }

        .hero p {

            font-size: 18px;

            color: #656b7e;

            max-width: 650px;

            line-height: 1.7;
        }

        /* Card promocional */

        .hero-card {

            background: white;

            padding: 30px;

            border-radius: 25px;

            box-shadow:
                0 20px 50px rgba(35, 42, 75, 0.12);
        }

        .hero-card h3 {

            font-size: 25px;

            margin-bottom: 10px;
        }

        .hero-card p {

            font-size: 15px;

            margin-bottom: 20px;
        }

        .beneficios {

            display: grid;

            gap: 12px;
        }

        .beneficio {

            padding: 13px;

            border-radius: 12px;

            background: #f7f8fc;

            font-weight: bold;
        }

        /* =====================================================
           CONTEÚDO
        ===================================================== */

        main {

            max-width: 1200px;

            margin: auto;

            padding: 50px 25px 80px;
        }

        .titulo-secao {

            display: flex;

            justify-content:
                space-between;

            align-items: end;

            margin-bottom: 25px;
        }

        .titulo-secao h2 {

            font-size: 34px;

            margin-bottom: 5px;
        }

        .titulo-secao p {

            color: #777d91;
        }

        /* =====================================================
           MENSAGEM DE ERRO
        ===================================================== */

        .erro {

            background: #fff0f0;

            border: 1px solid #ffb7b7;

            color: #b32626;

            padding: 15px 18px;

            border-radius: 12px;

            margin-bottom: 25px;

            font-weight: bold;
        }

        /* =====================================================
           PESQUISA
        ===================================================== */

        .filtros {

            background: white;

            padding: 20px;

            border-radius: 18px;

            display: flex;

            gap: 15px;

            flex-wrap: wrap;

            margin-bottom: 30px;

            box-shadow:
                0 8px 25px rgba(30, 35, 60, 0.06);
        }

        .campo-busca {

            flex: 1;

            min-width: 250px;
        }

        .campo-busca input,
        .filtro {

            width: 100%;

            padding: 14px;

            border: 1px solid #dfe3ec;

            border-radius: 12px;

            outline: none;

            background: white;
        }

        .campo-busca input:focus,
        .filtro:focus {

            border-color: #f0447b;

            box-shadow:
                0 0 0 3px
                rgba(240, 68, 123, 0.10);
        }

        .filtro {

            width: 220px;
        }

        /* =====================================================
           FILMES
        ===================================================== */

        .filmes {

            display: grid;

            grid-template-columns:
                repeat(4, 1fr);

            gap: 22px;
        }

        .filme {

            background: white;

            border-radius: 20px;

            overflow: hidden;

            box-shadow:
                0 10px 30px rgba(30, 35, 60, 0.08);

            border: 2px solid transparent;

            transition: 0.3s;
        }

        .filme:hover {

            transform:
                translateY(-7px);

            box-shadow:
                0 18px 40px
                rgba(30, 35, 60, 0.14);
        }

        .filme:has(input:checked) {

            border-color: #f0447b;
        }

        .poster {

            width: 100%;

            height: 320px;

            object-fit: cover;

            display: block;
        }

        .filme-conteudo {

            padding: 17px;
        }

        .filme h3 {

            font-size: 18px;

            min-height: 45px;
        }

        .genero {

            color: #777d91;

            font-size: 13px;

            margin: 6px 0;
        }

        .preco {

            color: #f0447b;

            font-weight: bold;

            font-size: 19px;
        }

        .selecionar {

            display: block;

            margin-top: 13px;

            background: #f7f8fc;

            padding: 10px;

            border-radius: 10px;

            cursor: pointer;

            font-weight: bold;
        }

        .selecionar input {

            accent-color: #f0447b;

            margin-right: 5px;
        }

        /* =====================================================
           FORMULÁRIO
        ===================================================== */

        .checkout {

            background: white;

            margin-top: 45px;

            padding: 32px;

            border-radius: 25px;

            box-shadow:
                0 15px 40px
                rgba(30, 35, 60, 0.08);
        }

        .checkout h2 {

            font-size: 30px;

            margin-bottom: 8px;
        }

        .checkout-subtitulo {

            color: #777d91;

            margin-bottom: 25px;
        }

        .formulario {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 20px;
        }

        .campo {

            display: flex;

            flex-direction: column;

            gap: 7px;
        }

        .campo-completo {

            grid-column: 1 / -1;
        }

        label {

            font-weight: bold;

            color: #454b60;
        }

        input[type="text"],
        input[type="number"],
        select {

            width: 100%;

            padding: 14px;

            border: 1px solid #dfe3ec;

            border-radius: 12px;

            outline: none;
        }

        input:focus,
        select:focus {

            border-color: #f0447b;

            box-shadow:
                0 0 0 3px
                rgba(240, 68, 123, 0.10);
        }

        /* Radio buttons */

        .opcoes {

            display: flex;

            flex-wrap: wrap;

            gap: 12px;
        }

        .opcao {

            padding: 13px 16px;

            background: #f7f8fc;

            border: 1px solid #e1e4ec;

            border-radius: 12px;

            cursor: pointer;
        }

        .opcao input {

            accent-color: #f0447b;

            margin-right: 5px;
        }

        /* Botão */

        .area-botao {

            grid-column: 1 / -1;

            display: flex;

            justify-content:
                space-between;

            align-items: center;

            margin-top: 10px;

            gap: 20px;
        }

        .observacao {

            color: #777d91;

            font-size: 14px;
        }

        .botao {

            border: none;

            padding: 16px 30px;

            border-radius: 13px;

            color: white;

            font-weight: bold;

            cursor: pointer;

            background:
                linear-gradient(
                    90deg,
                    #ff8a00,
                    #f0447b
                );

            box-shadow:
                0 10px 25px
                rgba(240, 68, 123, 0.25);

            transition: 0.3s;
        }

        .botao:hover {

            transform:
                translateY(-2px);
        }

        /* =====================================================
           RODAPÉ
        ===================================================== */

        footer {

            background: #eaf0f8;

            padding: 30px 25px;

            text-align: center;

            color: #687086;
        }

        /* =====================================================
           RESPONSIVIDADE
        ===================================================== */

        @media(max-width: 1000px) {

            .filmes {

                grid-template-columns:
                    repeat(3, 1fr);
            }

            .hero-container {

                grid-template-columns: 1fr;
            }
        }

        @media(max-width: 750px) {

            .menu {

                display: none;
            }

            .filmes {

                grid-template-columns:
                    repeat(2, 1fr);
            }

            .formulario {

                grid-template-columns: 1fr;
            }

            .campo-completo,
            .area-botao {

                grid-column: auto;
            }

            .area-botao {

                flex-direction: column;

                align-items: stretch;
            }

            .botao {

                width: 100%;
            }
        }

        @media(max-width: 480px) {

            .filmes {

                grid-template-columns: 1fr;
            }

            .poster {

                height: 400px;
            }

            .promocao {

                display: none;
            }
        }

    </style>

</head>

<body>

<!-- =========================================================
     CABEÇALHO
========================================================= -->

<header>

    <div class="navbar">

        <!-- Logo enviada para o projeto -->
        <img
            src="assets/logo-cineplay.png"
            class="logo"
            alt="Logo CinePlay"
        >

        <nav class="menu">

            <a href="#filmes">
                🎬 Filmes
            </a>

            <a href="#compra">
                🎟️ Ingressos
            </a>

            <a href="#rodape">
                📞 Contato
            </a>

        </nav>

        <div class="promocao">
            10% OFF
        </div>

    </div>

</header>


<!-- =========================================================
     BANNER PRINCIPAL
========================================================= -->

<section class="hero">

    <div class="hero-container">

        <div>

            <span class="tag">
                CinePlay • experiência de cinema
            </span>

            <h1>
                Seu filme.
                <br>

                <span class="gradient-text">
                    Seu momento.
                </span>
            </h1>

            <p>
                Escolha seu filme favorito, selecione sua sessão,
                escolha o tipo de ingresso e aproveite uma experiência
                completa no CinePlay.
            </p>

        </div>


        <div class="hero-card">

            <h3>
                🍿 Tudo pronto para sua sessão?
            </h3>

            <p>
                Escolha seu filme e monte sua experiência.
            </p>

            <div class="beneficios">

                <div class="beneficio">
                    🎟️ Ingressos meia e inteira
                </div>

                <div class="beneficio">
                    🍿 Combos especiais
                </div>

                <div class="beneficio">
                    🎬 Vários filmes disponíveis
                </div>

                <div class="beneficio">
                    💳 Diversas formas de pagamento
                </div>

            </div>

        </div>

    </div>

</section>


<!-- =========================================================
     CONTEÚDO PRINCIPAL
========================================================= -->

<main>

    <?php if ($erro): ?>

        <div class="erro">

            ⚠️
            <?php
            echo htmlspecialchars($erro);
            ?>

        </div>

    <?php endif; ?>


    <section id="filmes">

        <div class="titulo-secao">

            <div>

                <h2>
                    🎬 Filmes em destaque
                </h2>

                <p>
                    Escolha seu filme favorito.
                </p>

            </div>

        </div>


        <!-- Pesquisa e filtro -->

        <div class="filtros">

            <div class="campo-busca">

                <input
                    type="text"
                    id="busca"
                    placeholder="🔎 Pesquisar filme..."
                >

            </div>


            <select
                class="filtro"
                id="filtroGenero"
            >

                <option value="todos">
                    Todos os gêneros
                </option>

                <option value="animacao">
                    Animação
                </option>

                <option value="romance">
                    Romance
                </option>

                <option value="comedia">
                    Comédia
                </option>

                <option value="terror">
                    Terror
                </option>

                <option value="acao">
                    Ação
                </option>

                <option value="drama">
                    Drama
                </option>

            </select>

        </div>


        <!-- =================================================
             FORMULÁRIO
        ================================================= -->

        <form
            action="logica.php"
            method="POST"
            id="formCompra"
        >

            <!-- Catálogo -->

            <div class="filmes">

                <?php foreach ($catalogo as $filme): ?>

                    <article
                        class="filme"
                        data-nome="<?php echo strtolower($filme['titulo']); ?>"
                        data-genero="<?php echo $filme['genero']; ?>"
                    >

                        <img
                            src="<?php echo $filme['imagem']; ?>"
                            class="poster"
                            alt="<?php echo htmlspecialchars($filme['titulo']); ?>"
                        >

                        <div class="filme-conteudo">

                            <h3>
                                <?php
                                echo htmlspecialchars(
                                    $filme['titulo']
                                );
                                ?>
                            </h3>

                            <div class="genero">
                                <?php
                                echo htmlspecialchars(
                                    $filme['categoria']
                                );
                                ?>
                            </div>

                            <div class="preco">

                                A partir de

                                R$
                                <?php
                                echo number_format(
                                    $filme['preco'],
                                    2,
                                    ',',
                                    '.'
                                );
                                ?>

                            </div>


                            <label class="selecionar">

                                <input
                                    type="radio"
                                    name="filme"
                                    value="<?php echo $filme['codigo']; ?>"
                                    required
                                >

                                Escolher filme

                            </label>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>


            <!-- =================================================
                 ÁREA DE COMPRA
            ================================================= -->

            <section
                class="checkout"
                id="compra"
            >

                <h2>
                    🎟️ Finalizar compra
                </h2>

                <p class="checkout-subtitulo">
                    Preencha seus dados e escolha as opções da sessão.
                </p>


                <div class="formulario">


                    <!-- Nome -->

                    <div class="campo">

                        <label>
                            Nome do cliente
                        </label>

                        <input
                            type="text"
                            name="nome"
                            placeholder="Digite seu nome"
                            required
                        >

                    </div>


                    <!-- Quantidade -->

                    <div class="campo">

                        <label>
                            Quantidade de ingressos
                        </label>

                        <input
                            type="number"
                            name="qtd_ingresso"
                            min="1"
                            max="10"
                            value="1"
                            required
                        >

                    </div>


                    <!-- Tipo de ingresso -->

                    <div class="campo">

                        <label>
                            Tipo de ingresso
                        </label>

                        <div class="opcoes">

                            <label class="opcao">

                                <input
                                    type="radio"
                                    name="tipo_ingresso"
                                    value="inteira"
                                    required
                                >

                                Inteira

                            </label>

                            <label class="opcao">

                                <input
                                    type="radio"
                                    name="tipo_ingresso"
                                    value="meia"
                                >

                                Meia-entrada

                            </label>

                        </div>

                    </div>


                    <!-- Sessão -->

                    <div class="campo">

                        <label>
                            Horário da sessão
                        </label>

                        <select
                            name="sessao"
                            required
                        >

                            <option value="">
                                Selecione
                            </option>

                            <option value="14:00">
                                14:00
                            </option>

                            <option value="16:30">
                                16:30
                            </option>

                            <option value="19:00">
                                19:00
                            </option>

                            <option value="21:30">
                                21:30
                            </option>

                        </select>

                    </div>


                    <!-- Sala -->

                    <div class="campo">

                        <label>
                            Sala
                        </label>

                        <select
                            name="sala"
                            required
                        >

                            <option value="">
                                Escolha a sala
                            </option>

                            <option value="Sala 01 - 2D">
                                Sala 01 - 2D
                            </option>

                            <option value="Sala 02 - 3D">
                                Sala 02 - 3D
                            </option>

                            <option value="Sala 03 - VIP">
                                Sala 03 - VIP
                            </option>

                            <option value="Sala 04 - IMAX">
                                Sala 04 - IMAX
                            </option>

                        </select>

                    </div>


                    <!-- Combo -->

                    <div class="campo">

                        <label>
                            🍿 Combo
                        </label>

                        <select
                            name="combo"
                        >

                            <option value="nenhum">
                                Sem combo
                            </option>

                            <option value="pipoca">
                                Pipoca + Refrigerante — R$ 18,00
                            </option>

                            <option value="familia">
                                Combo Família — R$ 32,00
                            </option>

                            <option value="premium">
                                Combo Premium — R$ 45,00
                            </option>

                        </select>

                    </div>


                    <!-- Pagamento -->

                    <div class="campo">

                        <label>
                            💳 Forma de pagamento
                        </label>

                        <select
                            name="pagamento"
                            required
                        >

                            <option value="">
                                Selecione
                            </option>

                            <option value="Pix">
                                Pix
                            </option>

                            <option value="Cartão de Crédito">
                                Cartão de Crédito
                            </option>

                            <option value="Cartão de Débito">
                                Cartão de Débito
                            </option>

                            <option value="Dinheiro">
                                Dinheiro
                            </option>

                        </select>

                    </div>


                    <!-- Botão -->

                    <div class="area-botao">

                        <p class="observacao">
                            🎁 Desconto promocional de 10%
                            aplicado aos ingressos.
                        </p>

                        <button
                            type="submit"
                            class="botao"
                        >

                            🎟️ Comprar ingressos

                        </button>

                    </div>

                </div>

            </section>

        </form>

    </section>

</main>


<!-- =========================================================
     RODAPÉ
========================================================= -->

<footer id="rodape">

    <strong>
        🎬 CinePlay
    </strong>

    <br><br>

    Cinema, diversão e tecnologia em uma experiência só.

    <br>

    © 2026 CinePlay - Todos os direitos reservados.

</footer>


<!-- =========================================================
     JAVASCRIPT
     Pesquisa e filtro dos filmes
========================================================= -->

<script>

    const busca =
        document.getElementById("busca");

    const filtro =
        document.getElementById("filtroGenero");

    const filmes =
        document.querySelectorAll(".filme");


    function filtrarFilmes() {

        const texto =
            busca.value.toLowerCase();

        const genero =
            filtro.value;


        filmes.forEach(function(filme) {

            const nome =
                filme.dataset.nome;

            const categoria =
                filme.dataset.genero;


            const correspondeNome =
                nome.includes(texto);

            const correspondeGenero =
                genero === "todos" ||
                categoria === genero;


            if (
                correspondeNome &&
                correspondeGenero
            ) {

                filme.style.display = "block";

            } else {

                filme.style.display = "none";

            }

        });

    }


    busca.addEventListener(
        "input",
        filtrarFilmes
    );


    filtro.addEventListener(
        "change",
        filtrarFilmes
    );

</script>

</body>
</html>