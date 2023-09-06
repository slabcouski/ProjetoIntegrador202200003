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
        <main class="d-flex justify-content-center">
          <div class="conteit d-flex flex-column">
              <h1 class="text-center mt-2">Ola,Joao</h1>
                  <div class="card-body shadow my-2 bg-white rounded p-3 frequencia" style="width: 20rem;">
                          <h2>Tec. Informatica</h2>
                          <h6 class="text-end">Total: 1250h</h6>
                          <h6>Frequência: 54h</h6>
                          <h6>Faltas: 30h</h6>
                  </div>
                  <a class="verMais rounded shadow ms-auto link-light link-offset-2 link-underline-opacity-0"> <h5 class="text-center my-2">Ver Mais</h5></a>
                  <div class="rounded shadow calendario my-2 d-flex justify-content-center">
                      <div class="m-3" id='calendar'></div>
                  </div>
          </div>
        </main>
        <?php include_once("../../parts/footer.php"); ?>
    </div>
</body>
<script src="../frequencia/fullcalendar-6.1.8/dist/index.global.js"></script>
<script src="../../../assets/js/confCalendario.js"></script>
<script src="../../../assets/js/frequencia.js"></script>

</html>