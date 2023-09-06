<?php

    session_start();
    if (!isset($_SESSION["dados"]) && !$_SESSION["dados"]["usuarioCheckado"]) {
        header("Location: ../../../");
    }

    //print_r($_SESSION["dados"]);

?>
<!DOCTYPE html>
<html lang="pt-br" class="default">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/reset.css">
    <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../assets/css/variables.css">
    <link rel="stylesheet" href="../../../assets/css/header.css">
    <link rel="stylesheet" href="../../../assets/css/footer.css">
    <link rel="stylesheet" href="../../../assets/css/financeiro.css">
    <link rel="stylesheet" href="../../../assets/css/icons.css">
    <link rel="stylesheet" href="../../../assets/css/configuracoes.css">
    <title>Financeiro</title>
</head>
<body>
    <div class="container-fluid p-0 mb-5">
        <?php include_once("../../parts/header.php"); ?>
        <main class="container d-flex flex-column align-items-center">
            <div class="d-flex mt-5 p-botao div_meses">
                <button class="meses" >Abril</button>
                <button class="meses" >Maio</button>
                <button class="meses" >Junho</button>
                <button class="meses" >Julho</button>
                <button class="meses" >Agosto</button>
            </div>
            <br>
            <div class="text-center div_meio">
                <div class="card border border-light my-3">
            <span class="mt-2 text-center "><h2>A vencer</h2></span>
            </div>
            </div>
            <br>
            <br>
                <h2 class="display-1"><b>R$ 447,89</b></h2>
                <p class="p-estilizado">Vencimento 1 de agosto</p>
            </div>
            <div class="d-flex flex-column align-items-center div_final">
                <button class="mt-4 btn-edit rounded-4 shadow">Pagar Boleto</button>
                <a class="mt-4 text-center text-decoration-none a-edit">Histórico de quitação</a>
            </div>
        </main>
        <?php include_once("../../parts/footer.php"); ?>
    </div>
    <script src="../../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/jquery/jquery.js"></script>
    <script src="../../../assets/jquery/jquery.mask.js"></script>
    <?php include_once("../../parts/modalConfiguracoes.php"); ?>
    <script src="../../../assets/js/configuracoes.js"></script>
</body>
</html>