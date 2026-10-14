<?php

/*
    ============================================================
    CINEPLAY - LÓGICA DO SISTEMA
    ============================================================
    Responsável por:
    - Criar o catálogo de filmes
    - Criar funções
    - Receber os dados do formulário
    - Validar informações
    - Calcular valores
    - Aplicar desconto
    - Calcular combos
    - Salvar a compra na sessão
    - Enviar para o relatório
*/

session_start();


/* ============================================================
   CATÁLOGO DE FILMES
============================================================ */

$catalogo = [

    [
        "codigo" => "luca",
        "titulo" => "Luca",
        "categoria" => "Animação • Família",
        "genero" => "animacao",
        "imagem" => "assets/luca.jpg",
        "preco" => 20.00
    ],

    [
        "codigo" => "pica-pau",
        "titulo" => "Pica-Pau: O Filme",
        "categoria" => "Comédia • Família",
        "genero" => "comedia",
        "imagem" => "assets/pica-pau.webp",
        "preco" => 20.00
    ],

    [
        "codigo" => "bom-filho",
        "titulo" => "O Bom Filho à Casa Torna",
        "categoria" => "Comédia",
        "genero" => "comedia",
        "imagem" => "assets/bom-filho.jpg",
        "preco" => 22.00
    ],

    [
        "codigo" => "about-time",
        "titulo" => "Questão de Tempo",
        "categoria" => "Romance • Comédia",
        "genero" => "romance",
        "imagem" => "assets/about-time.jpg",
        "preco" => 22.00
    ],

    [
        "codigo" => "como-eu-era",
        "titulo" => "Como Eu Era Antes de Você",
        "categoria" => "Romance • Drama",
        "genero" => "romance",
        "imagem" => "assets/como-eu-era.jpg",
        "preco" => 25.00
    ],

    [
        "codigo" => "heretic",
        "titulo" => "Heretic",
        "categoria" => "Terror",
        "genero" => "terror",
        "imagem" => "assets/heretic.jpg",
        "preco" => 24.00
    ],

    [
        "codigo" => "operacao",
        "titulo" => "Operação Vingança",
        "categoria" => "Ação • Suspense",
        "genero" => "acao",
        "imagem" => "assets/operacao-vinganca.webp",
        "preco" => 27.00
    ],

    [
        "codigo" => "minha-melhor-amiga",
        "titulo" => "Minha Melhor Amiga",
        "categoria" => "Comédia • Drama",
        "genero" => "comedia",
        "imagem" => "assets/minha-melhor-amiga.webp",
        "preco" => 23.00
    ],

    [
        "codigo" => "until-dawn",
        "titulo" => "Until Dawn: Noite de Terror",
        "categoria" => "Terror",
        "genero" => "terror",
        "imagem" => "assets/until-dawn.webp",
        "preco" => 26.00
    ],

    [
        "codigo" => "presencas",
        "titulo" => "Presenças Ocultas",
        "categoria" => "Terror • Suspense",
        "genero" => "terror",
        "imagem" => "assets/presencas-ocultas.jpg",
        "preco" => 24.00
    ],

    [
        "codigo" => "coraline",
        "titulo" => "Coraline",
        "categoria" => "Animação • Fantasia",
        "genero" => "animacao",
        "imagem" => "assets/coraline.jpg",
        "preco" => 21.00
    ],

    [
        "codigo" => "divertida-mente",
        "titulo" => "Divertida Mente 2",
        "categoria" => "Animação • Família",
        "genero" => "animacao",
        "imagem" => "assets/divertida-mente-2.jpeg",
        "preco" => 23.00
    ]

];


/* ============================================================
   FUNÇÃO PARA ENCONTRAR UM FILME
============================================================ */

function obterFilme($codigo)
{
    global $catalogo;

    foreach ($catalogo as $filme) {

        if ($filme["codigo"] === $codigo) {

            return $filme;

        }

    }

    return null;
}


/* ============================================================
   FUNÇÃO PARA CALCULAR OS INGRESSOS
============================================================ */

function calcularIngressos(
    $preco,
    $quantidade,
    $tipo
) {

    /*
        A meia-entrada custa metade
        do valor da inteira.
    */

    if ($tipo === "meia") {

        $preco = $preco / 2;

    }

    return $preco * $quantidade;
}


/* ============================================================
   FUNÇÃO PARA CALCULAR O COMBO
============================================================ */

function calcularCombo(
    $combo,
    $quantidade
) {

    if ($combo === "pipoca") {

        return 18.00 * $quantidade;

    }

    if ($combo === "familia") {

        return 32.00 * $quantidade;

    }

    if ($combo === "premium") {

        return 45.00 * $quantidade;

    }

    return 0;
}


/* ============================================================
   FUNÇÃO PARA MOSTRAR O NOME DO COMBO
============================================================ */

function nomeCombo($combo)
{

    if ($combo === "pipoca") {

        return "Pipoca + Refrigerante";

    }

    if ($combo === "familia") {

        return "Combo Família";

    }

    if ($combo === "premium") {

        return "Combo Premium";

    }

    return "Sem combo";
}


/* ============================================================
   FUNÇÃO PARA FORMATAR VALORES
============================================================ */

function formatarMoeda($valor)
{

    return "R$ " .
        number_format(
            $valor,
            2,
            ",",
            "."
        );
}


/* ============================================================
   VERIFICA SE O FORMULÁRIO FOI ENVIADO
============================================================ */

if ($_SERVER["REQUEST_METHOD"] === "POST") {


    /* ========================================================
       RECEBENDO OS DADOS
    ======================================================== */

    $nome =
        trim($_POST["nome"] ?? "");

    $filmeCodigo =
        $_POST["filme"] ?? "";

    $quantidade =
        (int)($_POST["qtd_ingresso"] ?? 0);

    $tipo =
        $_POST["tipo_ingresso"] ?? "";

    $sessao =
        $_POST["sessao"] ?? "";

    $sala =
        $_POST["sala"] ?? "";

    $combo =
        $_POST["combo"] ?? "nenhum";

    $pagamento =
        $_POST["pagamento"] ?? "";


    /* ========================================================
       VALIDAÇÃO
    ======================================================== */

    if (
        $nome === "" ||
        $filmeCodigo === "" ||
        $quantidade < 1 ||
        $quantidade > 10 ||
        $tipo === "" ||
        $sessao === "" ||
        $sala === "" ||
        $pagamento === ""
    ) {

        $_SESSION["erro"] =
            "Preencha todos os campos corretamente.";

        header("Location: view.php");

        exit;
    }


    /* ========================================================
       LOCALIZAR FILME
    ======================================================== */

    $filme =
        obterFilme($filmeCodigo);


    if ($filme === null) {

        $_SESSION["erro"] =
            "O filme selecionado não foi encontrado.";

        header("Location: view.php");

        exit;
    }


    /* ========================================================
       CÁLCULOS
    ======================================================== */

    // Valor dos ingressos
    $subtotalIngressos =
        calcularIngressos(
            $filme["preco"],
            $quantidade,
            $tipo
        );


    // Valor do combo
    $valorCombo =
        calcularCombo(
            $combo,
            $quantidade
        );


    // Subtotal antes do desconto
    $subtotal =
        $subtotalIngressos +
        $valorCombo;


    /* ========================================================
       DESCONTO DE 10%
    ======================================================== */

    /*
        O desconto é aplicado apenas
        sobre os ingressos.
    */

    $desconto =
        $subtotalIngressos * 0.10;


    // Total final
    $total =
        $subtotal - $desconto;


    /* ========================================================
       CONVERTER TIPO DE INGRESSO
    ======================================================== */

    if ($tipo === "meia") {

        $tipoTexto =
            "Meia-entrada";

    } else {

        $tipoTexto =
            "Inteira";

    }


    /* ========================================================
       SALVAR COMPRA NA SESSÃO
    ======================================================== */

    $_SESSION["compra"] = [

        "nome" =>
            $nome,

        "filme" =>
            $filme["titulo"],

        "imagem" =>
            $filme["imagem"],

        "preco_ingresso" =>
            $filme["preco"],

        "quantidade" =>
            $quantidade,

        "tipo" =>
            $tipoTexto,

        "sessao" =>
            $sessao,

        "sala" =>
            $sala,

        "combo" =>
            nomeCombo($combo),

        "subtotal_ingressos" =>
            $subtotalIngressos,

        "valor_combo" =>
            $valorCombo,

        "subtotal" =>
            $subtotal,

        "desconto" =>
            $desconto,

        "total" =>
            $total,

        "pagamento" =>
            $pagamento,

        "data" =>
            date("d/m/Y H:i")

    ];


    /* ========================================================
       ENVIAR PARA O RELATÓRIO
    ======================================================== */

    unset($_SESSION["erro"]);

    header(
        "Location: view_relatorio.php"
    );

    exit;
}

?>