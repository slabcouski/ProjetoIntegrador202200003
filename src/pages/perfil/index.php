<?php

    session_start();
    if (!isset($_SESSION["dados"]) && !$_SESSION["dados"]["usuarioCheckado"]) {
        header("Location: ../../../");
    }

    $finalizandoCadastro = isset($_GET["finalizandoCadastro"]) ? $_GET["finalizandoCadastro"] : false;
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
    <link rel="stylesheet" href="../../../assets/css/perfil.css">
    <link rel="stylesheet" href="../../../assets/css/configuracoes.css">
    <link rel="stylesheet" href="../../../assets/css/icons.css">
    <title>Perfil</title>
</head>
<body>
    <div class="container-fluid p-0">
        <?php include_once("../../parts/header.php"); ?>
        <main class="mb-5">
            <div class="d-flex flex-column justify-content-center">
                <span class="caneta-icone icon-caneta align-self-center"></span>
                <div class="circle rounded-circle d-flex align-self-center align-items-center justify-content-center mt-5">
                    <span class="icone icon-person"></span>
                </div>
            </div> 
            <form action="../../php/register.php" method="POST" class="w-100 d-flex flex-column align-items-center mt-5">
                <div class="div-form d-flex flex-wrap px-5">
                    <div>
                        <input type="text" disabled class="ps-2 rounded-2 shadow border-0" value="<?= $_SESSION["dados"]["cpf"] ?>">
                    </div>
                    <div class="d-flex flex-column div-edit">
                        <div class="align-self-end div-teste">
                            <input type="checkbox" id="nome-social"><label for="nome-social" class="ms-1">Incluir nome social</label>
                        </div>
                        <input type="text" placeholder="Nome completo" class="ps-2 rounded-2 shadow border-0" required name="nome" value="<?php if ($_SESSION["dados"]["nome"] != null) { echo($_SESSION["dados"]["nome"]); }  ?>">
                        <input type="text" id="nome-social-input" placeholder="Nome social" class="input-nome-social ps-2 rounded-2 shadow border-0" name="nome-social">
                    </div>
                    <div>
                        <input type="email" placeholder="Email" class="mt-2 ps-2 rounded-2 shadow border-0" required name="email" value="<?php if ($_SESSION["dados"]["email"] != null) { echo($_SESSION["dados"]["email"]); }  ?>">
                    </div>
                    <div>
                        <input type="text" placeholder="Celular" class="mt-2 ps-2 rounded-2 shadow border-0" required name="celular" value="<?php if ($_SESSION["dados"]["celular"] != null) { echo($_SESSION["dados"]["celular"]); }  ?>">
                    </div>
                    <div>
                        <input type="text" placeholder="Outro Celular" class="mt-2 ps-2 rounded-2 shadow border-0" name="outro-celular">
                    </div>
                    <div>
                        <?php if ($_SESSION["dados"]["dtNasc"] != null) { ?>
                            <input type="text" placeholder="Data de nascimento" class="mt-2 ps-2 rounded-2 shadow border-0" value="<?= $_SESSION["dados"]["dtNasc"] ?>" disabled>
                        <?php } else { ?>
                            <input type="date" placeholder="Data de nascimento" class="mt-2 ps-2 rounded-2 shadow border-0" required name="dtNasc">
                        <?php } ?>
                    </div>
                    <div>
                        <div class="div-edit-2 mt-2">
                            <p><b>Sexo</b></p>
                            <div class="d-flex">
                                <div>
                                    <input type="radio" name="sexo" value="masculino" id="masc" checked><label for="masc" class="ms-1">Masculino</label>
                                </div>
                                <div class="ms-4">
                                    <input type="radio" name="sexo" value="feminino" id="femi"><label for="femi" class="ms-1">Feminino</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="div-edit-2 mt-2">
                            <p><b>Aceita participar do programa Connect Empresas?</b></p>
                            <div class="d-flex">
                                <div>
                                    <input type="radio" name="empresa" id="sim"><label for="sim" class="ms-1">Sim</label>
                                </div>
                                <div class="ms-4">
                                    <input type="radio" name="empresa" id="nao"><label for="nao" class="ms-1">Não</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="div-edit-2 my-2">
                            <div>
                                <input type="checkbox" id="endereco" <?php if ($finalizandoCadastro) { ?>checked<?php } ?>><label for="endereco" class="ms-1">Editar endereço</label>
                            </div>
                            <div <?php if ($finalizandoCadastro) { ?>checked<?php } else { ?>class="div-endereco"<?php } ?> id="div-endereco">
                                <input type="text" placeholder="Rua" class="mt-2 ps-2 rounded-2 shadow border-0" required name="rua">
                                <input type="text" placeholder="Bairro" class="mt-2 ps-2 rounded-2 shadow border-0" required name="bairro">
                                <input type="text" placeholder="Número" class="mt-2 ps-2 rounded-2 shadow border-0" required name="numero">
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="mt-2 div-edit-3">
                            <input type="checkbox" id="politica" required><label for="politica" class="ms-1">Li e aceito a POLÍTICA DE PRIVACIDADE. *</label>
                        </div>
                        <div class="mt-2 div-edit-3 d-flex">
                            <input type="checkbox" id="publi" class="input-start"><label for="publi" class="ms-1">ACEITO receber informações e conteúdos publicitários do Senac por e-mail.</label>
                        </div>
                        <div class="mt-2 div-edit-3 d-flex">
                            <input type="checkbox" id="infor" class="input-start"><label for="infor" class="ms-1">ACEITO receber informações via WhatsApp, SMS e ligações telefônicas.</label>
                        </div>
                    </div>
                    <div class="d-flex align-items-center flex-column mt-5 mb-5 w-100">
                        <a class="text-center buttons a-edit p-1 rounded-2 shadow" id="buttonAlterarSenha">Alterar senha</a>
                        <button type="submit" class="text-center buttons p-1 mt-2 rounded-2 shadow">Gravar informações</button>
                    </div>
                </div>
            </form>
        </main>
        <?php include_once("../../parts/footer.php"); ?>
    </div>
    <script src="../../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/jquery/jquery.js"></script>
    <script src="../../../assets/jquery/jquery.mask.js"></script>
    <script src="../../../assets/js/perfil.js"></script>
    <?php include_once("../../parts/modalConfiguracoes.php"); ?>
    <script src="../../../assets/js/configuracoes.js"></script>
</body>
</html>