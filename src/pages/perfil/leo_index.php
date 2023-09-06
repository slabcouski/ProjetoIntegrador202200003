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
    <link rel="stylesheet" href="../../../assets/css/perfil.css">
    <link rel="stylesheet" href="../../../assets/css/configuracoes.css">
    <link rel="stylesheet" href="../../../assets/css/icons.css">
    <title>Perfil</title>
</head>
<body>
    <div class="container-fluid p-0">
        <?php include_once("../../parts/header.php"); ?>
        <main class="mb-5">
            <div>
                <div class="d-flex flex-column justify-content-center"><span class="caneta-icone icon-caneta align-self-center"></span>
                    <div class="circle rounded-circle d-flex align-self-center align-items-center  justify-content-center mt-5"><span class="icone icon-person"></span></div>
                </div> 
            </div>
                <form action="">
                    <div class="d-flex justify-content-center p-5 flex-column">
                        <input type="text" placeholder="000.000.000-00" class="input-group shadow border-0 text-center rounded-2 p-1">
                        <div class="d-flex justify-content-center"><input type="checkbox" id="nome-social" class="mx-1"><label for="nome-social">Incluir nome social</label></div>
                        <input type="text" placeholder="Nome Completo" class="input-group shadow border-0 text-center rounded-2 p-1  mt-3">
                        <input type="text" placeholder="Email" class="input-group shadow border-0 text-center rounded-2 p-1 mt-4">
                        <input type="text" placeholder="Confirme o Email" class="input-group shadow border-0 text-center rounded-2 p-1 mt-4">
                        <input type="text" placeholder="Celular" class="input-group shadow border-0 text-center rounded-2 p-1 mt-4">
                        <input type="text" placeholder="Outro telefone" class="input-group shadow border-0 text-center rounded-2 p-1 mt-4">
                        <input type="date" placeholder="00/00/0000" class="input-group shadow border-0 text-center rounded-2 p-1 mt-4">
                    </div>
                    <div class="d-flex align-items-center flex-column">
                        <div class="w-75">
                            <h5><strong>Sexo</strong></h5>
                            <input type="radio" name="sexo" value="Masculino" id="Masculino">
                            <label for="Masculino">Masculino</label>
                            <input type="radio" name="sexo" value="Feminino" id="Feminino">
                            <label for="Feminino">Feminino</label>
                            <h5 class="my-2"><strong>Aceita participar do programa Connect Empresas?</strong></h5>
                            <input type="radio" name="Connect" id="Sim">
                            <label for="Sim">Sim</label>
                            <input type="radio" name="Connect" value="Nao" id="Nao">
                            <label for="Nao">Não</label>
                            <br>
                            <input type="checkbox" name="endereço" id="endereço" class="my-3">
                            <label for="endereço">Editar endereço residencial</label>
                        </div>
                    </div>
                    <hr>
                    <div class="d-flex flex-column mt-2 p-3">
                        <div>
                            <input type="checkbox" class="my-2 mx-1" id="termos" required>
                            <label for="termos">Li e aceito a POLITICA DE PRIVACIDADE. *</label>
                        </div>
                        <div  class="d-flex align-items-start my-2">
                            <input type="checkbox" class="my-2 mx-1" id="publicitarioEmail">
                            <label for="publicitarioEmail">ACEITO receber informações e conteúdos publicitários do Senac por e-mail.</label>
                        </div>
                        <div class="d-flex align-items-start">
                            <input type="checkbox" class="my-2 mx-1" id="publicitarioWpp">
                            <label for="publicitarioWpp">ACEITO receber informações via WhatsApp, SMS e ligações telefônicas.</label>
                        </div>
                    </div>
                    <div class="d-flex flex-column p-5">
                        <a href="" class="btn-change text-white shadow">Alterar senha</a>
                        <a href="" class="btn-save text-white shadow mt-3">Gravar informações</a>
                    </div>
                </form>
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