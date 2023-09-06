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
    <link rel="stylesheet" href="../../../assets/css/icons.css">
    <link rel="stylesheet" href="../../../assets/css/documentacao.css">
    <link rel="stylesheet" href="../../../assets/css/configuracoes.css">
    <title>Documentação</title>
</head>
<body>
    <div class="container-fluid p-0">
        <?php include_once("../../parts/header.php"); ?>
        <main class="container mb-5 pb-4">
            <h2 class="text-center   mt-5">Documentação</h2>
            <div class="row row-cols-auto justify-content-center mx-0 px-0 mt-4">
                <div class="col mt-3">
                    <div class="d-flex justify-content-between align-items-center p-3 shadow rounded-3 div-edit">
                        <p>ICONE</p>
                        <p class="p-edit"><b>RG</b></p>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="d-flex justify-content-between align-items-center p-3 shadow rounded-3 div-edit">
                        <p>ICONE</p>
                        <p class="p-edit"><b>CPF</b></p>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="d-flex justify-content-between align-items-center p-3 shadow rounded-3 div-edit">
                        <p>ICONE</p>
                        <p class="p-edit"><b>Comprovante de residência</b></p>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="d-flex justify-content-between align-items-center p-3 shadow rounded-3 div-edit">
                        <p>ICONE</p>
                        <p class="p-edit"><b>Certidão</b></p>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="d-flex justify-content-between align-items-center p-3 shadow rounded-3 div-edit">
                        <p>ICONE</p>
                        <p class="p-edit"><b>Histórico Escolar</b></p>
                    </div>
                </div>
                <div class="col mt-3">
                    <div class="d-flex justify-content-between align-items-center p-3 shadow rounded-3 div-edit">
                        <p>ICONE</p>
                        <p class="p-edit"><b>Histórico Escolar</b></p>
                    </div>
                </div>
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