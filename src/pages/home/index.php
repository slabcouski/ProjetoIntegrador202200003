<?php

    session_start();
    if (!isset($_SESSION["dados"]) && !$_SESSION["dados"]["usuarioCheckado"]) {
        header("Location: ../../../");
    }

    if($_SESSION["dados"]["nome"] == null) {
        header("Location: ../perfil?finalizandoCadastro=true");
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
    <link rel="stylesheet" href="../../../assets/css/sidebar.css">
    <link rel="stylesheet" href="../../../assets/css/home.css">
    <link rel="stylesheet" href="../../../assets/css/icons.css">
    <link rel="stylesheet" href="../../../assets/css/configuracoes.css">
    <title>Home</title>
</head>
<body>
    <div class="container-fluid p-0 vh-100">
        <?php include_once("../../parts/header.php"); ?>
        <main class="d-flex">
            <?php include_once("../../parts/sidebar.php"); ?>
            <div class="d-flex flex-column ">
                <div class="div-tab tablet flex-column "> 
                    <h2 class="tablet p-text text-center"></h2>   
                    <span class="quadrado tablet align-self-center"></span> 
                </div>
                <div class="row row-cols-4 mt-5">
                    <div class="col mt-1 d-flex flex-column align-items-center">
                        <a class="botao rounded-circle mx-5 d-flex align-items-center justify-content-center text-decoration-none shadow" href="../frequencia/">
                            <span class="icon icon-clock"></span>
                        </a>
                        <h6 class="p-text text-center mt-2">Frequência</h6>
                    </div>
                    <div class="col mt-1 d-flex flex-column align-items-center">
                        <a class="botao rounded-circle mx-5 d-flex align-items-center justify-content-center text-decoration-none shadow" href="../courses/index.php">
                            <span class="icon icon-hat"></span>
                        </a> 
                        <h6 class="p-text text-center mt-2">Cursos</h6>
                    </div>
                    <div class="col mt-1 d-flex flex-column align-items-center">
                        <a class="botao rounded-circle mx-5 d-flex align-items-center justify-content-center text-decoration-none shadow" href="../financeiro/">
                            <span class="icon icon-wallet"></span>
                        </a> 
                        <h6 class="p-text text-center mt-2">Financeiro</h6>
                    </div>
                    <div class="col mt-1 d-flex flex-column align-items-center">
                        <a class="botao rounded-circle mx-5 d-flex align-items-center justify-content-center text-decoration-none shadow" href="../carteira/">
                            <span class="icon icon-credit-card"></span>
                        </a> 
                        <h6 class="p-text text-center mt-2">Carteira</h6> 
                    </div>
                    <div class="col mt-1 d-flex flex-column align-items-center">
                        <a class="botao rounded-circle mx-5 d-flex align-items-center justify-content-center text-decoration-none shadow" href="../documentacao/">
                            <span class="icon icon-documentaao"></span>
                        </a> 
                        <h6 class="p-text text-center mt-2">Documentação</h6>
                    </div>
                    <div class="col mt-1 d-flex flex-column align-items-center">
                        <a class="botao rounded-circle mx-5 d-flex align-items-center justify-content-center text-decoration-none shadow" href="https://www.pr.senac.br/aluno/?p_cad=6&bco_oport=1" target="_blank">
                            <span class="icon icon-briefcase"></span>
                        </a> 
                        <h6 class="p-text text-center mt-2">Connect Empresas</h6>
                    </div> 
                    <div class="col mt-1 d-flex flex-column align-items-center">
                        <a class="botao rounded-circle mx-5 d-flex align-items-center justify-content-center text-decoration-none shadow" href="https://www.pr.senac.br/biblioteca/" target="_blank">
                            <span class="icon icon-book"></span>
                        </a> 
                        <h6 class="p-text text-center mt-2">Biblioteca</h6>
                    </div>
                    <div class="col mt-1 d-flex flex-column align-items-center">
                        <a class="botao rounded-circle mx-5 d-flex align-items-center justify-content-center text-decoration-none shadow" href="../office.365/">
                            <span class="icon icon-grid"></span>
                        </a>
                        <h6 class="p-text text-center mt-2">Office 365</h6>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <?php include_once("../../parts/footer.php"); ?>
    <?php include_once("../../parts/modalConfiguracoes.php"); ?>
    <script src="../../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>                               
    <script src="../../../assets/js/configuracoes.js"></script>
    <script src="../../../assets/js/sidebar.js"></script>
</body>
</html>