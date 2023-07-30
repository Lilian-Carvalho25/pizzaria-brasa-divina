<?php
require_once "connect.php";

// register.php
function insertUser($conexao, $nome, $email, $senha, $cep, $complemento) {
    $tipo = 'comum'; 

    $sql = "INSERT INTO novosUsuarios(nome, email, senha, cep, complemento, tipo) VALUES ('$nome', '$email', '$senha', '$cep', '$complemento', '$tipo')";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));
}

// login.php
function searchUser($conexao, $email){
    $sql = "SELECT * FROM novosUsuarios WHERE email = '$email'";

    $resultado = mysqli_query($conexao, $sql) 
                or die (mysqli_error($conexao));
    return mysqli_fetch_assoc($resultado);

}

// updateProfile.php
function readUser($conexao, $id){
    $sql = "SELECT * FROM novosUsuarios WHERE id = $id";

    $resultado = mysqli_query($conexao, $sql) 
                or die (mysqli_error($conexao));
    return mysqli_fetch_assoc($resultado);

}

// updateProfile.php
function updateUser($conexao, $id, $nome, $email, $senha, $cep, $complemento) {
    $sql = "UPDATE novosUsuarios SET nome = '$nome', email = '$email', senha = '$senha', 
            cep = '$cep', complemento = '$complemento' WHERE id = $id";
    mysqli_query($conexao, $sql) or die(mysqli_error($conexao));

} 