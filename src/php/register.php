<?php
    session_start();
    require_once("./conncetion.php");
    require_once("./functions.php");
    $functions = new Functions;

    if (isset($_POST["cpf"], $_POST["password"])) {
        $cpfMasked = filter_var($_POST["cpf"], FILTER_SANITIZE_SPECIAL_CHARS);
        $senha = filter_var($_POST["password"], FILTER_SANITIZE_SPECIAL_CHARS);
        $cpf = $functions->unmaskCPF($cpfMasked);

        $command = "SELECT * FROM aluno WHERE cpf = :cpf";
        $prepare = $pdo->prepare($command);
        $prepare->bindParam(":cpf", $cpf);
        $prepare->execute();

        if ($prepare->rowCount() > 0) {
            $_SESSION["mensagens"] = [
                "showMsg" => true,
                "msg" => "Usuário já cadastrado.",
            ];
            header("Location: ../pages/cadastro");
        } else {
            $command = "INSERT INTO aluno (cpf, senha) VALUE (:cpf, :senha)";
            $prepare = $pdo->prepare($command);
            $prepare->bindParam(":cpf", $cpf);
            $prepare->bindParam(":senha", $senha);
            $prepare->execute();

            if ($prepare->rowCount() > 0) {
                $_SESSION["dados"] = [
                    "usuarioCheckado" => true,
                    "nome" => null,
                    "cpf" => $cpfMasked,
                    "senha" => $senha,
                    "email" => null,
                    "celular" => null
                ];
                header("Location: ../pages/home");
            } else {
                $_SESSION["mensagens"] = [
                    "showMsg" => true,
                    "msg" => "Erro.",
                ];
                header("Location: ../pages/cadastro");
            }
        }
    } elseif (isset($_POST["nome"], $_POST["email"], $_POST["celular"], $_POST["dtNasc"], $_POST["rua"], $_POST["bairro"], $_POST["numero"])) {
        $name = trim(filter_var($_POST["nome"], FILTER_SANITIZE_SPECIAL_CHARS)); // Obrigatório
        $email = trim(filter_var($_POST["email"], FILTER_SANITIZE_SPECIAL_CHARS)); // Obrigatório
        $telefoneMasked = filter_var($_POST["celular"], FILTER_SANITIZE_SPECIAL_CHARS); // Obrigatório
        $dataNascMasked = filter_var($_POST["dtNasc"], FILTER_SANITIZE_SPECIAL_CHARS); // Obrigatório
        $rua = filter_var($_POST["rua"], FILTER_SANITIZE_SPECIAL_CHARS); // Obrigatório
        $bairro = filter_var($_POST["bairro"], FILTER_SANITIZE_SPECIAL_CHARS); // Obrigatório
        $numeroCasa = filter_var($_POST["numero"], FILTER_SANITIZE_SPECIAL_CHARS); // Obrigatório

        $sexo = isset($_POST["sexo"]) ? filter_var($_POST["sexo"], FILTER_SANITIZE_SPECIAL_CHARS) : null;
        $nomeSocial = isset($_POST["nome-social"]) ? filter_var($_POST["nome-social"], FILTER_SANITIZE_SPECIAL_CHARS) : null;
        $outroCelular = isset($_POST["outro-celular"]) ? filter_var($_POST["outro-celular"], FILTER_SANITIZE_SPECIAL_CHARS) : null;

        $telefone = $functions->unmaskNumber($telefoneMasked);
        $dataNasc = $functions->unmaskDataNasc($dataNascMasked);
        $cpf = $functions->unmaskCPF($_SESSION["dados"]["cpf"]);

        $command = "UPDATE aluno SET nome = :nome, email = :email, fone = :fone, dtNasc = :dtNasc, sexo = :sexo WHERE cpf = :cpf";
        $prepare = $pdo->prepare($command);
        $prepare->bindParam(":nome", $name);
        $prepare->bindParam(":email", $email);
        $prepare->bindParam(":fone", $telefone);
        $prepare->bindParam(":dtNasc", $dataNasc);
        $prepare->bindParam(":sexo", $sexo);
        $prepare->bindParam(":cpf", $cpf);
        $prepare->execute();

        if ($prepare->rowCount() > 0) {
            $_SESSION["dados"]["nome"] = $name;
            $_SESSION["dados"]["email"] = $email;
            $_SESSION["dados"]["celular"] = $telefone;
            $_SESSION["dados"]["dtNasc"] = $dataNasc;
            header("Location: ../pages/home");
        }
    }
    unset($pdo);
?>