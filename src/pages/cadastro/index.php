<?php
    session_start();
    if (isset($_SESSION["dados"])) {
        header("Location: ../home");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../assets/css/reset.css">
    <link rel="stylesheet" href="../../../assets/css/cadastro.css">
    <link rel="stylesheet" href="../../../assets/bootstrap/css/bootstrap.min.css">
    <title>Cadastro</title>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <form action="../../php/register.php" method="POST" class="d-flex flex-column align-items-center rounded-4 py-5 shadow">
            <div>
                <img src="../../../assets/imgs/Logo_Senac.png" alt="Logo" height="150">
            </div>
            <?php if (isset($_SESSION["mensagens"]) && $_SESSION["mensagens"]["showMsg"]) { ?>
                <div class="alert alert-danger w-75 mt-4">
                    <?= $_SESSION["mensagens"]["msg"] ?>
                </div>
            <?php } ?>
            <div class="w-75 <?php if (isset($_SESSION["mensagens"]) && $_SESSION["mensagens"]["showMsg"]) { echo "mt-2"; } else { echo "mt-5"; } unset($_SESSION["mensagens"]); ?>">
                <div class="d-flex justify-content-between">
                    <div>
                        <label for="cpf">CPF</label>
                    </div>
                    <div>
                        <label id="label-cpf" class="label-cpf">CPF Inválido</label>
                    </div>
                </div>
                <input id="cpf" type="text" name="cpf" class="form-control w-100" autocomplete="off" required>
            </div>
            <div class="mt-3 w-75 d-flex flex-column">
                <div class="d-flex justify-content-between">
                    <div>
                        <label for="input-senha">Senha</label>
                    </div>
                    <div>
                        <label id="label-senha" class="label-senha">testes</label>
                    </div>
                </div>
                <input id="input-senha" type="password" name="password" class="form-control w-100" autocomplete="off" required>
                <img src="../../../assets/icons/eye-fill.svg" alt="Olho" height="20" class="align-self-end position-absolute eye-edit" id="eye-icon">
            </div>
            <div class="mt-3 w-75 d-flex flex-column">
                <label for="input-senha">Confirmar senha</label>
                <input id="input-senha-2" type="password" class="form-control w-100" autocomplete="off" required>
                <img src="../../../assets/icons/eye-fill.svg" alt="Olho" height="20" class="align-self-end position-absolute eye-edit" id="eye-icon-2">
            </div>
            <div class="mt-4 w-50 d-flex flex-column">
                <button class="w-100 btn shadow btn-edit" id="btn-cadastrar">Cadastrar</button>
                <a href="../../../" class="align-self-center mt-2 text-decoration-none a-edit">Possui uma conta?</a>
            </div>
        </form>
    </div>
    <script src="../../../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../../assets/jquery/jquery.js"></script>
    <script src="../../../assets/jquery/jquery.mask.js"></script>
    <script src="../../../assets/js/cadastro.js"></script>
</body>
</html>