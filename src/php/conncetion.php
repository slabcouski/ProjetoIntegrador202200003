<?php
    define("DB_USER", "dbpi03");
    define("DB_PASSWORD", "pi2023");
    define("DB_NAME", "dbpi03");
    define("DB_HOST", "localhost");

    try {
        $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    } catch (PDOException) {
        echo "Erro.";
    }
?>