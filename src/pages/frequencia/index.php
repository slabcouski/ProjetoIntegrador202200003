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
    <link rel="stylesheet" href="../../../assets/css/frequencia.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Frequência</title>
</head>
<body>
    <div class="container-fluid p-0">
        <?php include_once("../../parts/header.php"); ?>
        <main class="mb-5">
            <div class="container-fluid p-3">
                <div class=" row cart ">
                    <div class="col">
                        <h4 class=" mt-1">Tec. Informática</h4>
                        <p class="fs-6">Carga horária: 1400 horas</p>
                    </div>
                    <div class="col mt-3">
                        <p class="text-center fs-6">320 horas concluídas</p>

<!-- não sei que foi o porra, mas tem algum porre usando CSS inline, e eu não vou arrumar -nicolas -->

                        <div class="wborder shadow rounded-pill text-center" style="height:20px;width:160px;">
                            <div class="wgrey rounded-pill text-center" style="height:20px;width:50%;background-color: #F78B1F;"></div>
                        </div>
                    </div>
                </div>
                <div class="cardt border div-edit d-flex flex-column p-3 mx-3"> 
                    <div class="d-flex"><h6>Frequência:</h6><h6 class="frequencia">54h</h6></div>
                    <div class="d-flex"><h6>Faltas: </h6><h6 class="faltas">30h</h6></div>
                </div>
                <div class="d-flex justify-content-end my-3 mx-3">
                    <button type="submit" class="verMais">Ver mais</button>
                </div>
                <div class="div-edit d-flex flex-column p-3"> 
                    <div id="calendar" class="calendario"></div>
                </div>
            </div>
        </main>
        <?php include_once("../../parts/footer.php"); ?>
    </div>
    <script src="../../../assets/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="../frequencia/fullcalendar-6.1.8/dist/index.global.js"></script>
    <script src="../../../assets/js/confCalendario.js"></script>
</body>
</html>