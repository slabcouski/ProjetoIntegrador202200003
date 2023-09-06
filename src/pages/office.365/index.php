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
    <link rel="stylesheet" href="../../../assets/css/office.css">
    <link rel="stylesheet" href="../../../assets/css/configuracoes.css">
    <title>Office 365</title>
</head>
<body>
    <div class="container-fluid p-0 mb-5">
        <?php include_once("../../parts/header.php"); ?>
        <main class="container-fluid">
            <div class="d-flex flex-column justify-content-center">
                <div class="circle rounded-circle d-flex align-self-center align-items-center  justify-content-center mt-5"><span class="icone icon-person"></span></div>
                <h6 class="nomeAluno align-self-center mt-3"><?= $_SESSION["dados"]["nome"] ?></h6>
            </div>
            <div class="d-flex flex-column align-items-center">
                <div class="mt-3 pb-0"><p>Email e senha do estudante</p></div>
                <div>
                    <p class="text-center m-0 w-75"><strong><?= $_SESSION["dados"]["email"] ?></strong></p>
                    <p><strong><?= $_SESSION["dados"]["cpf"] ?></strong></p>
                </div>
            </div>
            <div class="pb-5 d-flex justify-content-center">
                <p class="w-75">Você possui uma assinatura gratuita do Pacote Office 365, válida durante todo o período em que sua matrícula estiver ativa conosco, <a href="#" class="text-decoration-none"><u>saiba mais</u></a></p>
            </div>
        </main>
        <?php include_once("../../parts/footer.php"); ?>
    </div>
    <?php include_once("../../parts/modalConfiguracoes.php"); ?>
    <script src="../../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/jquery/jquery.js"></script>
    <script src="../../../assets/jquery/jquery.mask.js"></script>
    <script src="../../../assets/js/configuracoes.js"></script>
</body>
</html>