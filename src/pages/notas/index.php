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
    <link rel="stylesheet" href="../../../assets/css/sidebar.css">
    <link rel="stylesheet" href="../../../assets/css/icons.css">
    <link rel="stylesheet" href="../../../assets/css/notas.css">
    <link rel="stylesheet" href="../../../assets/css/configuracoes.css">
    <title>Notas</title>
</head>
<body>
    <div class="container-fluid p-0">
        <?php include_once("../../parts/header.php"); ?>
        <main class="d-flex">
            <?php include_once("../../parts/sidebar.php"); ?>
            <div class="d-flex justify-content-center">
                <div class="row w-75 row-cols-auto justify-content-center mt-5">

                    <div class="col">
                        <div class="box-uc shadow">
                            <div class="header-box-uc d-flex justify-content-between align-items-center p-2 shadow">
                                <h5>Unidade 01</h3>
                                <h4 class="mt-1" id="seta-uc">V</h4>
                            </div>
                            <div class="d-flex justify-content-between p-3">
                                <div class="">
                                    <p>Frequências: <span>54</span></p>
                                    <p>Faltas: <span>30</span></p>
                                </div>
                                <div class="align-self-end">
                                    <p>Aprovado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box-uc shadow">
                            <div class="header-box-uc d-flex justify-content-between align-items-center p-2 shadow">
                                <h5>Unidade 02</h3>
                                <h4 class="mt-1" id="seta-uc">V</h4>
                            </div>
                            <div class="d-flex justify-content-between p-3">
                                <div class="">
                                    <p>Frequências: <span>54</span></p>
                                    <p>Faltas: <span>30</span></p>
                                </div>
                                <div class="align-self-end">
                                    <p>Aprovado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box-uc shadow">
                            <div class="header-box-uc d-flex justify-content-between align-items-center p-2 shadow">
                                <h5>Unidade 03</h3>
                                <h4 class="mt-1" id="seta-uc">V</h4>
                            </div>
                            <div class="d-flex justify-content-between p-3">
                                <div class="">
                                    <p>Frequências: <span>54</span></p>
                                    <p>Faltas: <span>30</span></p>
                                </div>
                                <div class="align-self-end">
                                    <p>Aprovado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box-uc shadow">
                            <div class="header-box-uc d-flex justify-content-between align-items-center p-2 shadow">
                                <h5>Unidade 04</h3>
                                <h4 class="mt-1" id="seta-uc">V</h4>
                            </div>
                            <div class="d-flex justify-content-between p-3">
                                <div class="">
                                    <p>Frequências: <span>54</span></p>
                                    <p>Faltas: <span>30</span></p>
                                </div>
                                <div class="align-self-end">
                                    <p>Aprovado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box-uc shadow">
                            <div class="header-box-uc d-flex justify-content-between align-items-center p-2 shadow">
                                <h5>Unidade 05</h3>
                                <h4 class="mt-1" id="seta-uc">V</h4>
                            </div>
                            <div class="d-flex justify-content-between p-3">
                                <div class="">
                                    <p>Frequências: <span>54</span></p>
                                    <p>Faltas: <span>30</span></p>
                                </div>
                                <div class="align-self-end">
                                    <p>Aprovado</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="box-uc shadow">
                            <div class="header-box-uc d-flex justify-content-between align-items-center p-2 shadow">
                                <h5>Unidade 06</h3>
                                <h4 class="mt-1" id="seta-uc">V</h4>
                            </div>
                            <div class="d-flex justify-content-between p-3">
                                <div class="">
                                    <p>Frequências: <span>54</span></p>
                                    <p>Faltas: <span>30</span></p>
                                </div>
                                <div class="align-self-end">
                                    <p>Aprovado</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </main>
    </div>
    <?php include_once("../../parts/footer.php"); ?>
    <?php include_once("../../parts/modalConfiguracoes.php"); ?>
    <script src="../../../assets/js/notas.js"></script>
    <script src="../../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/js/configuracoes.js"></script>
</body>
</html>