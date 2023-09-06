<?php
    require_once("../../php/functions.php");
    $functions = new Functions;
    $nome = $functions->fixName($_SESSION["dados"]["nome"]);
?>
<header class="cabecalho shadow py-1">
    <nav class="navbar">
        <div class="container-fluid">
            <a href="../home"><img src="../../../assets/imgs/Logo_Senac.png" height="35" class="Logo me-auto" id="header-img"></a>
            <div class="d-flex align-items-center">
                <div class="me-3">
                    <p class="p-color m-0"><?= $nome ?></p>
                    <p class="p-color estado m-0 text-end">Aluno</p>
                </div>
                <div class="dropdown">
                    <a class="icon-edit-sino icon-sino position-absolute" href="../avisos"></a>
                    <?php if (isset($_SESSION["dados"]["foto"]) && $_SESSION["dados"]["foto"] != null) { ?>
                        <img src="../../../assets/photos/<?= $_SESSION["dados"]["foto"] ?>.jpg" width="35" height="35" class="rounded-circle dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <?php } else { ?>
                        <button class="dropdown-toggle rounded-circle usuario" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="icon-edit-person icon-person d-flex justify-content-center"></span>
                        </button>
                    <?php } ?>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-edit">
                        <li><a class="dropdown-item text-center p-dropdown" href="../perfil">Ver perfil</a></li>
                        <li class="dropdown-divider divider-edit"></li>
                        <li><a class="dropdown-item text-center p-dropdown" href="../meusCursos">Meus Cursos</a></li>
                        <li><a class="dropdown-item text-center p-dropdown" href="#">Satisfação</a></li>
                        <li><a class="dropdown-item text-center p-dropdown" href="#" target="_blank">Suporte</a></li>
                        <li><a class="dropdown-item text-center p-dropdown" href="../sobre">Sobre</a></li>
                        <li class="dropdown-divider divider-edit"></li>
                        <li><a class="dropdown-item text-center p-dropdown-2" href="../../php/logoff.php">Sair</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>