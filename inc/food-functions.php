<?php
require_once "connect.php";

function readAllPizzas($conexao){
    $sql = "SELECT id, imagem, titulo, preco, resumo FROM alimentos";

    $resultado = mysqli_query($conexao, $sql)
    or die (mysqli_error($conexao));

    $alimentos = [];

    while ($alimento = mysqli_fetch_assoc($resultado)){
        array_push($alimentos, $alimento);
     }
     return $alimentos;
} 

function readAllDrinks($conexao){
    $sql = "SELECT id, imagem, titulo, preco, resumo FROM alimentos";

    $resultado = mysqli_query($conexao, $sql)
    or die (mysqli_error($conexao));

    $alimentos = [];

    while ($alimento = mysqli_fetch_assoc($resultado)){
        array_push($alimentos, $alimento);
     }
     return $alimentos;
} 
