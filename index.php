<?php
    session_start();
    if (isset($_SESSION["dados"])) {
        header("Location: ./src/pages/home");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="./assets/bootstrap/css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
    <div class="container-fluid d-flex justify-content-center align-items-center vh-100">
        <form action="./src/php/login.php" method="POST" class="d-flex flex-column align-items-center rounded-4 py-5 shadow">
            <div>
                <img src="./assets/imgs/Logo_Senac.png" alt="Logo" height="150">
            </div>
            <?php if (isset($_SESSION["mensagens"]) && $_SESSION["mensagens"]["showMsg"]) { ?>
                <div class="alert alert-danger w-75 mt-5">
                    <?= $_SESSION["mensagens"]["msg"] ?>
                </div>
            <?php } ?>
            <div class="w-75 <?php if (isset($_SESSION["mensagens"]) && $_SESSION["mensagens"]["showMsg"]) { echo "mt-2"; } else { echo "mt-5"; } ?>">
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
                <label for="input-senha">Senha</label>
                <input id="input-senha" type="password" name="password" class="form-control w-100" autocomplete="off" required>
                <img src="./assets/icons/eye-fill.svg" alt="Olho" height="20" class="align-self-end position-absolute eye-img" id="eye-icon">
                <?php if (isset($_SESSION["mensagens"]) && $_SESSION["mensagens"]["showMsg"] && $_SESSION["mensagens"]["msg"] == "CPF ou senha incorretos.") { ?>
                    <a href="#" class="a-edit text-decoration-none align-self-end">Esqueceu a senha?</a>
                <?php } ?>
            </div>
            <div class="w-50 d-flex flex-column mt-4">
                <button class="w-100 btn shadow btn-edit">Testsse</button>
                <a href="./src/pages/cadastro/" class="align-self-center mt-2 a-edit text-decoration-none">Fazer cadastro</a>
            </div>
        </form>
    </div>
    <script src="./assets/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./assets/jquery/jquery.js"></script>
    <script src="./assets/jquery/jquery.mask.js"></script>
    <script src="./assets/js/login.js"></script>
    <?php unset($_SESSION["mensagens"]); ?>
</body>
</html>