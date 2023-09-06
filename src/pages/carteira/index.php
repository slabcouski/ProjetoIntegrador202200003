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
    <link rel="stylesheet" href="../../../assets/css/carteira.css">
    <link rel="stylesheet" href="../../../assets/css/configuracoes.css">
    <title>Carteira</title>
</head>
<body>
    <div class="container-fluid p-0 mb-5">
        <?php include_once("../../parts/header.php"); ?>
        <main class="container-fluid">
            <div class="d-flex flex-column justify-content-center">
                <div class="circle rounded-circle d-flex align-self-center align-items-center  justify-content-center mt-5"><span class="icone icon-person"></span></div>
                <h3 class="nomeAluno align-self-center mt-3"><strong><?= $_SESSION["dados"]["nome"] ?></strong></h3>
            </div>
            <div class="container ">
                <div class="d-flex justify-content-between container mt-3">
                    <div>
                        <h6>CPF</h6>
                            <p><strong><?= $_SESSION["dados"]["cpf"] ?></strong></p>
                    </div>
                    <div>
                        <h6>Nascimento</h6>
                            <p><strong><?= $_SESSION["dados"]["dtNasc"] ?></strong></p>
                    </div>
                </div>
                <div class="d-flex justify-content-between container mt-3">
                    <div>
                        <h6>Matricula</h6>
                            <p><strong>5848  9494 5847</strong></p>
                    </div>
                    <div>
                        <h6>Validade</h6>
                            <p><strong>25/set/2024</strong></p>
                    </div>
                </div>
                <div class="d-flex justify-content-between container mt-3">
                    <div>
                        <h6>Cursos</h6>
                            <p><strong>Téc.Informatica</strong></p>
                    </div>
                        <div class="pe-4 me-2">
                            <h6>Campus</h6>
                            <p><strong>Caiobá</strong></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </main>
        <?php include_once("../../parts/footer.php"); ?>
    </div>
    <?php include_once("../../parts/modalConfiguracoes.php"); ?>
    <script src="../../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/js/configuracoes.js"></script>
    <script src="../../../assets/jquery/jquery.js"></script>
    <script src="../../../assets/jquery/jquery.mask.js"></script>
</body>
</html>
