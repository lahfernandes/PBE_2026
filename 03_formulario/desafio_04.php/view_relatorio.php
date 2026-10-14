<?php

/*
    ============================================================
    CINEPLAY - RELATÓRIO DA COMPRA
    ============================================================
    Esta página apresenta o comprovante final da compra.
*/

session_start();

/*
    Carrega as funções do sistema.
*/
require_once "logica.php";


/*
    Recupera os dados armazenados pelo logica.php.
*/
$compra =
    $_SESSION["compra"] ?? null;

?>

<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        CinePlay | Compra Confirmada
    </title>


    <style>

        /* =====================================================
           CONFIGURAÇÕES
        ===================================================== */

        * {

            margin: 0;

            padding: 0;

            box-sizing: border-box;

        }

        body {

            font-family:
                Arial,
                Helvetica,
                sans-serif;

            background:
                linear-gradient(
                    135deg,
                    #f5f7fc,
                    #fff1f7,
                    #eaf7ff
                );

            color: #25283d;

            min-height: 100vh;

        }

        /* =====================================================
           CABEÇALHO
        ===================================================== */

        header {

            background: white;

            border-bottom:
                1px solid #e5e7ef;

            padding: 10px 25px;

        }

        .header-content {

            max-width: 1000px;

            margin: auto;

            display: flex;

            align-items: center;

            justify-content:
                space-between;

        }

        .logo {

            width: 150px;

            height: 65px;

            object-fit: contain;

        }

        .status {

            color: #17a05d;

            font-weight: bold;

        }

        /* =====================================================
           CONTEÚDO
        ===================================================== */

        main {

            max-width: 900px;

            margin: 50px auto;

            padding: 0 20px 70px;

        }

        .sucesso {

            text-align: center;

            margin-bottom: 30px;

        }

        .icone {

            width: 75px;

            height: 75px;

            margin:
                0 auto 15px;

            display: flex;

            align-items: center;

            justify-content: center;

            border-radius: 50%;

            background: #e6faef;

            color: #16a05a;

            font-size: 38px;

            font-weight: bold;

        }

        .sucesso h1 {

            font-size: 42px;

            margin-bottom: 8px;

        }

        .sucesso p {

            color: #737a8e;

        }

        /* =====================================================
           COMPROVANTE
        ===================================================== */

        .comprovante {

            background: white;

            border-radius: 25px;

            overflow: hidden;

            box-shadow:
                0 20px 55px
                rgba(30, 35, 60, 0.12);

        }

        .comprovante-topo {

            padding: 25px;

            background:
                linear-gradient(
                    90deg,
                    #fff0d7,
                    #ffe7f2
                );

            display: flex;

            justify-content:
                space-between;

            align-items: center;

            gap: 20px;

        }

        .comprovante-topo h2 {

            margin-bottom: 5px;

        }

        .codigo {

            color: #f0447b;

            font-weight: bold;

            font-size: 14px;

        }

        /* =====================================================
           DADOS
        ===================================================== */

        .conteudo {

            padding: 30px;

        }

        .dados {

            display: grid;

            grid-template-columns:
                repeat(2, 1fr);

            gap: 15px;

        }

        .item {

            background: #f7f8fc;

            padding: 17px;

            border-radius: 14px;

        }

        .item span {

            display: block;

            color: #80869a;

            font-size: 13px;

            margin-bottom: 5px;

        }

        .item strong {

            font-size: 16px;

        }

        /* =====================================================
           FILME
        ===================================================== */

        .filme-relatorio {

            margin-top: 25px;

            padding: 20px;

            border-radius: 18px;

            background:
                linear-gradient(
                    135deg,
                    #fff7ed,
                    #fff0f6
                );

            display: flex;

            align-items: center;

            gap: 20px;

        }

        .filme-relatorio img {

            width: 90px;

            height: 120px;

            object-fit: cover;

            border-radius: 10px;

        }

        .filme-relatorio h3 {

            font-size: 21px;

            margin-bottom: 8px;

        }

        .filme-relatorio p {

            color: #70778b;

        }

        /* =====================================================
           VALORES
        ===================================================== */

        .valores {

            margin-top: 30px;

            border-top:
                1px solid #e5e7ed;

            padding-top: 20px;

        }

        .linha {

            display: flex;

            justify-content:
                space-between;

            gap: 20px;

            padding: 9px 0;

            color: #62697c;

        }

        .linha strong {

            color: #30354a;

        }

        .desconto {

            color: #159658;

        }

        .desconto strong {

            color: #159658;

        }

        .total {

            border-top:
                2px dashed #dfe2e9;

            margin-top: 12px;

            padding-top: 20px;

            font-size: 25px;

            font-weight: bold;

            color: #25283d;

        }

        .total strong {

            color: #f0447b;

            font-size: 28px;

        }

        /* =====================================================
           BOTÕES
        ===================================================== */

        .acoes {

            display: flex;

            justify-content: center;

            gap: 12px;

            flex-wrap: wrap;

            margin-top: 30px;

        }

        .botao {

            padding: 14px 22px;

            border-radius: 12px;

            text-decoration: none;

            border: none;

            cursor: pointer;

            font-weight: bold;

            font-size: 15px;

        }

        .principal {

            color: white;

            background:
                linear-gradient(
                    90deg,
                    #ff8a00,
                    #f0447b
                );

        }

        .secundario {

            color: #4c5368;

            background: white;

            border:
                1px solid #dfe3ec;

        }

        /* =====================================================
           AVISO
        ===================================================== */

        .aviso {

            background: white;

            padding: 30px;

            border-radius: 20px;

            text-align: center;

            box-shadow:
                0 15px 40px
                rgba(30, 35, 60, 0.08);

        }

        .aviso p {

            color: #71788b;

            margin: 15px 0 20px;

        }

        /* =====================================================
           RODAPÉ
        ===================================================== */

        footer {

            text-align: center;

            padding: 25px;

            color: #737a8e;

        }

        /* =====================================================
           RESPONSIVO
        ===================================================== */

        @media(max-width: 650px) {

            .dados {

                grid-template-columns: 1fr;

            }

            .comprovante-topo {

                flex-direction: column;

                align-items: flex-start;

            }

            .sucesso h1 {

                font-size: 32px;

            }

            .filme-relatorio {

                flex-direction: column;

                text-align: center;

            }

            .total {

                font-size: 20px;

            }

        }

        /* =====================================================
           IMPRESSÃO
        ===================================================== */

        @media print {

            body {

                background: white;

            }

            header,
            footer,
            .acoes {

                display: none;

            }

            main {

                margin: 0;

                max-width: 100%;

            }

            .comprovante {

                box-shadow: none;

            }

        }

    </style>

</head>

<body>


<!-- =========================================================
     CABEÇALHO
========================================================= -->

<header>

    <div class="header-content">

        <img
            src="assets/logo-cineplay.png"
            class="logo"
            alt="Logo CinePlay"
        >

        <div class="status">

            ✓ Compra segura

        </div>

    </div>

</header>


<main>


<?php if (!$compra): ?>

    <!-- =====================================================
         CASO NÃO EXISTA COMPRA
    ===================================================== -->

    <div class="aviso">

        <h2>
            🎟️ Nenhuma compra encontrada
        </h2>

        <p>
            Você ainda não realizou uma compra.
            Volte para o catálogo e escolha seu filme.
        </p>

        <a
            href="view.php"
            class="botao principal"
        >
            ← Voltar para os filmes
        </a>

    </div>


<?php else: ?>


    <!-- =====================================================
         MENSAGEM DE SUCESSO
    ===================================================== -->

    <section class="sucesso">

        <div class="icone">
            ✓
        </div>

        <h1>
            Compra confirmada!
        </h1>

        <p>
            Seu ingresso foi reservado com sucesso.
        </p>

    </section>


    <!-- =====================================================
         COMPROVANTE
    ===================================================== -->

    <section class="comprovante">


        <!-- Cabeçalho do comprovante -->

        <div class="comprovante-topo">

            <div>

                <h2>
                    🎬 CinePlay
                </h2>

                <p>
                    Comprovante de compra
                </p>

            </div>

            <div class="codigo">

                PEDIDO #CINE-<?php
                    echo date("His");
                ?>

            </div>

        </div>


        <div class="conteudo">


            <!-- =================================================
                 DADOS DO CLIENTE E DA SESSÃO
            ================================================= -->

            <div class="dados">


                <div class="item">

                    <span>
                        Cliente
                    </span>

                    <strong>

                        <?php
                        echo htmlspecialchars(
                            $compra["nome"]
                        );
                        ?>

                    </strong>

                </div>


                <div class="item">

                    <span>
                        Data da compra
                    </span>

                    <strong>

                        <?php
                        echo htmlspecialchars(
                            $compra["data"]
                        );
                        ?>

                    </strong>

                </div>


                <div class="item">

                    <span>
                        Quantidade
                    </span>

                    <strong>

                        <?php
                        echo $compra["quantidade"];
                        ?>

                        ingresso(s)

                    </strong>

                </div>


                <div class="item">

                    <span>
                        Tipo
                    </span>

                    <strong>

                        <?php
                        echo htmlspecialchars(
                            $compra["tipo"]
                        );
                        ?>

                    </strong>

                </div>


                <div class="item">

                    <span>
                        Sessão
                    </span>

                    <strong>

                        <?php
                        echo htmlspecialchars(
                            $compra["sessao"]
                        );
                        ?>

                    </strong>

                </div>


                <div class="item">

                    <span>
                        Sala
                    </span>

                    <strong>

                        <?php
                        echo htmlspecialchars(
                            $compra["sala"]
                        );
                        ?>

                    </strong>

                </div>


                <div class="item">

                    <span>
                        Combo
                    </span>

                    <strong>

                        <?php
                        echo htmlspecialchars(
                            $compra["combo"]
                        );
                        ?>

                    </strong>

                </div>


                <div class="item">

                    <span>
                        Pagamento
                    </span>

                    <strong>

                        <?php
                        echo htmlspecialchars(
                            $compra["pagamento"]
                        );
                        ?>

                    </strong>

                </div>

            </div>


            <!-- =================================================
                 FILME ESCOLHIDO
            ================================================= -->

            <div class="filme-relatorio">

                <img
                    src="<?php
                        echo htmlspecialchars(
                            $compra["imagem"]
                        );
                    ?>"
                    alt="Filme escolhido"
                >

                <div>

                    <h3>

                        <?php
                        echo htmlspecialchars(
                            $compra["filme"]
                        );
                        ?>

                    </h3>

                    <p>
                        🎬 Sessão confirmada no CinePlay
                    </p>

                </div>

            </div>


            <!-- =================================================
                 RESUMO FINANCEIRO
            ================================================= -->

            <div class="valores">


                <div class="linha">

                    <span>
                        Ingressos
                    </span>

                    <strong>

                        <?php
                        echo formatarMoeda(
                            $compra["subtotal_ingressos"]
                        );
                        ?>

                    </strong>

                </div>


                <div class="linha">

                    <span>
                        Combo
                    </span>

                    <strong>

                        <?php
                        echo formatarMoeda(
                            $compra["valor_combo"]
                        );
                        ?>

                    </strong>

                </div>


                <div class="linha">

                    <span>
                        Subtotal
                    </span>

                    <strong>

                        <?php
                        echo formatarMoeda(
                            $compra["subtotal"]
                        );
                        ?>

                    </strong>

                </div>


                <div class="linha desconto">

                    <span>
                        🎁 Desconto promocional - 10%
                    </span>

                    <strong>

                        - <?php
                        echo formatarMoeda(
                            $compra["desconto"]
                        );
                        ?>

                    </strong>

                </div>


                <div class="linha total">

                    <span>
                        Total final
                    </span>

                    <strong>

                        <?php
                        echo formatarMoeda(
                            $compra["total"]
                        );
                        ?>

                    </strong>

                </div>

            </div>


            <!-- =================================================
                 BOTÕES
            ================================================= -->

            <div class="acoes">

                <a
                    href="view.php"
                    class="botao principal"
                >
                    🎬 Comprar outro ingresso
                </a>


                <button
                    class="botao secundario"
                    onclick="window.print()"
                >
                    🖨️ Imprimir comprovante
                </button>

            </div>

        </div>

    </section>


<?php endif; ?>


</main>


<!-- =========================================================
     RODAPÉ
========================================================= -->

<footer>

    <strong>
        CinePlay 🎬
    </strong>

    <br><br>

    Cinema, diversão e tecnologia.

    <br>

    © 2026 CinePlay

</footer>

</body>

</html>