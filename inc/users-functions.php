<?php
require_once "connect.php";

function insertUser($conexao, $nome, $email, $senha, $cep, $complemento) {
    $tipo = 'comum'; 

    $sql = "INSERT INTO novosUsuarios(nome, email, senha, cep, complemento, tipo) VALUES ('$nome', '$email', '$senha', '$cep', '$complemento', '$tipo')";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}
