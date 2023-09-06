<?php

    session_start();
    if (!isset($_SESSION["dados"]) && !$_SESSION["dados"]["usuarioCheckado"]) {
        header("Location: ../../../");
    }

    //print_r($_SESSION["dados"]);
    $jsonFilePath ="../../data/grade.json";

    $jsonContent = file_get_contents($jsonFilePath);
    $data = json_decode($jsonContent,true);

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
    <link rel="stylesheet" href="../../../assets/css/grade.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Grade</title>
</head>
<body>
    <div class="container-fluid p-0">
        <?php include_once("../../parts/header.php"); ?>
        <main class="container-fluid">
            <h1 class="text-center mt-3 textCor">Grade</h1>
        <table class="table">
            <thead>
                <tr>
                    <th class=" textCor">Unidades Curriculares</th>
                    <th class=" textCor">C.H</th>
                    <th class=" textCor">ver mais</th>
                </tr>
            </thead>
                <?php if($data !== null) { 
                    foreach ($data as $grade){ ?>
                        <tbody>
                            <tr>
                                <td><p id="<?= $grade["id"]?>UC"><?= $grade["UC"]?></p></td>
                                <td><p id="<?= $grade["id"]?>CH"><?= $grade["CH"]?></p></td>
                                <td><button class=" display-6 border-0 bg-transparent bi bi-plus-circle-fill" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" id="<?= $grade["id"]?>"></button></td>
                            </tr>
                        </tbody>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header cardModal">
                                        <p class="modal-title fs-5" id="teste">???</p>
                                        <a type="button" class="btn-close cardModal" data-bs-dismiss="modal" aria-label="Close"></a>
                                    </div>
                                    <div class="modal-body cardModal rounded-bottom">
                                        <p><?= $grade["conteudo"]?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php }}; ?>
            </table>
        </main>
        <?php include_once("../../parts/footer.php"); ?>
    </div>
    <script src="../../../assets/js/grade.js"></script>
    <script src="../../../assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>