<?php

include("./bd.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if (!empty($email) && !empty($senha)) {
        // Prepara a query para evitar SQL Injection
        $stmt = $conn->prepare("INSERT INTO `login` (email, upwd) VALUES (?, ?)");
        $stmt->bind_param("ss", $email, $senha);
        if ($stmt->execute() === TRUE) {
            echo "Cadastrado com sucesso";
        } else {
            echo "Erro, motivo: " . $stmt->error;
        }

        $stmt->close();
    }
}
