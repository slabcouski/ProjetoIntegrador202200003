<?php

    session_start();
    if (!isset($_SESSION["dados"]) && !$_SESSION["dados"]["usuarioCheckado"]) {
        header("Location: ../../../");
    }



    $jsonFilePath ="../../data/cursos.json";

    $jsonContent = file_get_contents($jsonFilePath);
    $data = json_decode($jsonContent,true);


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
    <link rel="stylesheet" href="../../../assets/css/courses_old.css">
    <link rel="stylesheet" href="../../../assets/css/configuracoes.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Cursos</title>
    </head>
<body>
    <div class="container-fluid p-0">
        <?php include_once("../../parts/header.php"); ?>
        <main class="mb-5">
            <div class="container p-3">
                    <div class="d-flex justify-content-between my-5">
                        <h1>Cursos</h1>
                        <button type="button" class="btn-edit align-self-center shadow">Matinhos</button>
                    </div>
                    <?php  if($data !== null){ 
                        foreach ($data as $cursos){ ?>
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                                <div class="card d-flex justify-content-center flex-column p-3 mb-3 mx-3" style="width: 21rem;">
                                    <h5 class="card-title text-center"><?= $cursos['nome_curso']?></h5>
                                    <img src="../../data/img/<?= $cursos['imagem']?>" class="card-img-center" alt="...">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between ">
                                            <p class="card-text"><i class="bi bi-geo-alt-fill"></i><?= $cursos['cidade']?></p>
                                            <p class="card-text"><i class="bi bi-calendar3"></i> <?= $cursos['data']?></p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="card-text"><?= $cursos['dia_semana']?></p>
                                            <p class="card-text"><?= $cursos['hora']?></p>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <p class="card-text"><i class="bi bi-clock-fill"></i> <?= $cursos['carga_horaria']?></p>
                                            <a href="#" class="btn btn-primary">Saiba Mais</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <?php }} ; ?>
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