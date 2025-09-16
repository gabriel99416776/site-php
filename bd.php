<?php
define("BANCO_DE_DADOS", [
    "localhost",
    "root",
    "",
    "estudo_php"
]);

$conn = new mysqli(
    BANCO_DE_DADOS[0],
    BANCO_DE_DADOS[1],
    BANCO_DE_DADOS[2],
    BANCO_DE_DADOS[3]
);

if ($conn->connect_error){
    die("Erro ao conectar ao banco de dados". $conn->connect_error);
}

