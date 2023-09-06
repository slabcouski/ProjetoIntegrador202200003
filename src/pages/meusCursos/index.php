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
    <link rel="stylesheet" href="../../../assets/css/meusCursos.css">
    <link rel="stylesheet" href="../../../assets/css/configuracoes.css">
    <title>meusCursos</title>
</head>
<body>
    <div class="container-fluid p-0">
        <?php include_once("../../parts/header.php"); ?>
        <main class="mb-5">
            <div>
                <div class="text d-flex justify-content-center mt-5">
                    <h3><strong>Olá, João Coreia da Silva</strong></h3>
                </div>
                <div class="text d-flex justify-content-center mt-3">
                    <h3><strong>Seus Cursos</strong></h3> 
                </div>
            </div>
        <div class="p-3 ">
            <div class="container shadow-lg rounded-2 mt-4 ">
                <div class="text pt-2"><h3>Tec.Informatica</h3></div>
                <div class="text-success d-flex justify-content-end mt-5"><h4>Concluido</h4></div>
            </div>
            <div class="container shadow-lg rounded-2 mt-4">
                <div class="text pt-2"><h3>English</h3></div>
                <div class="text-warning d-flex justify-content-end mt-5"><h4>Cursando</h4></div>
            </div>
        </div>
            
            
        </main>
        <?php include_once("../../parts/footer.php"); ?>
    </div>
    <script src="../../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/jquery/jquery.js"></script>
    <?php include_once("../../parts/modalConfiguracoes.php"); ?>
    <script src="../../../assets/js/configuracoes.js"></script>
</body>
</html>
