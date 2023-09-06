<?php
    session_start();
    require_once("./conncetion.php");
    require_once("./functions.php");
    $functions = new Functions;

    if (isset($_POST["cpf"], $_POST["password"])) {
        $cpfMasked = filter_var($_POST["cpf"], FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS);
        $cpf = $functions->unmaskCPF($cpfMasked);

        $command = "SELECT * FROM aluno WHERE cpf =" . $cpf;
        $query = $pdo->query($command);

        if ($query->rowCount() > 0) {
            $arrayDB = $query->fetch(PDO::FETCH_ASSOC);
            $cpfDB = $arrayDB["cpf"];
            $senhaDB = $arrayDB["senha"];
            if ($cpf == $cpfDB && $senha == $senhaDB) {
                $_SESSION["dados"] = [
                    "usuarioCheckado" => true,
                    "nome" => $arrayDB["nome"],
                    "cpf" => $cpfMasked,
                    "senha" => $senha,
                    "email" => $arrayDB["email"],
                    "celular" => $arrayDB["fone"],
                    "foto" => $arrayDB["foto"],
                    "dtNasc" => $arrayDB["dtNasc"]
                ];
                header("Location: ../pages/home");
            } else {
                $_SESSION["mensagens"] = [
                    "showMsg" => true,
                    "msg" => "CPF ou senha incorretos."
                ];
                header("Location: ../../");
            }
        } else {
            $_SESSION["mensagens"] = [
                "showMsg" => true,
                "msg" => "Usuário não encontrado."
            ];
            header("Location: ../../");
        }
    }
    unset($pdo);
?>