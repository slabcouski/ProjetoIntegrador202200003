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
    <main>
        <div class="container-fluid p-0">
            <?php include_once("../../parts/header.php"); ?>
            <div class="mb-5">
                <div class="container">
                    <div class="d-flex justify-content-between my-3">
                        <h1>Cursos</h1>
                        <button class=" display-6 border-0 rounded shadow  bi bi-filter px-2" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal" id="<?= $grade["id"]?>"></button></td>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-body cardModal rounded-bottom">
                                        <div class="d-flex justify-content-between">
                                        <h1 class="modal-title fs-2 mb-3" id="teste">Cursos</h1>
                                        <a type="button" class="btn-close cardModal" data-bs-dismiss="modal" aria-label="Close"></a>
                                        </div>
                                        <div class="container text-center">
                                            <div class="row d-flex justify-content-center">
                                                <button type="button" class="d-flex col-6 col-sm-2 w-50 border-0 rounded  justify-content-center p-4">
                                                    <div class="flex-column">
                                                    <i class="display-1 bi bi-pencil"></i> Cursos
                                                    </div>
                                                </button>
                                                <button type="button" class="d-flex col-6 col-sm-2 w-50 border-0 rounded flex-column p-4">
                                                    <i class="display-1 bi bi-mortarboard"></i>Faculdade
                                                </button>                                  
                                            </div>
                                            <div class="row d-flex justify-content-center">
                                                <button type="button" class="d-flex col-6 col-sm-2 w-50 border-0 rounded flex-column p-4">
                                                    <i class="display-1 bi bi-gear"></i>Técnicos
                                                </button>
                                                <button type="button" class="d-flex col-6 col-sm-2 w-50 border-0 rounded flex-column p-4">
                                                    <i class="display-1 bi bi-display"></i>EAD
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                    <h1 class="modal-title fs-2 ms-3" id="teste">Cidade</h1>
                                    <button type="button" class="btn btn-outline-primary m-3">Matinhos</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 mx-3">
                        <?php  if($data !== null){ 
                            foreach ($data as $cursos){ ?>
                            <div class="col">
                                <div class="card h-100 shadow ">
                                    <div class="card-title text-center fw-bold pt-3 px-2"><?= $cursos['nome_curso']?></div>
                                        <div class="card-body">
                                            <div class="row">
                                                <img src="../../data/img/<?= $cursos['imagem']?>" class="card-img-center rounded-5" alt="...">
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="card-text mt-2"><i class="bi bi-geo-alt-fill me-2"></i><?= $cursos['cidade']?></p>
                                                </div>
                                                <div class="col">
                                                    <p class="card-text mt-2 texto"><i class="bi bi-calendar3 me-2"></i><?= $cursos['data']?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="card-text mt-2"><?= $cursos['dia_semana']?></p>
                                                </div>
                                                <div class="col">
                                                    <p class="card-text mt-2 texto"><?= $cursos['hora']?></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col">
                                                    <p class="card-text mt-2"><i class="bi bi-clock-fill me-2"></i><?= $cursos['carga_horaria']?></p>
                                                </div>
                                                <div class="col texto">
                                                    <a href="#" class="btn btn-primary mt-2">Saiba Mais</a>
                                                </div>
                                            </div>   
                                        </div>
                                </div>
                            </div>
                        <?php }} ; ?>
                    </div>       
                </div>
            </div>
        <?php include_once("../../parts/footer.php"); ?>   
        </div>
    </main>  
    <script src="../../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/jquery/jquery.js"></script>
    <?php include_once("../../parts/modalConfiguracoes.php"); ?>
    <script src="../../../assets/js/configuracoes.js"></script>
</body>
</html>