<?php
require_once "connect.php";

function readAllPizzas($conexao){
    $sql = "SELECT id, imagem, titulo, preco, resumo FROM pizzas";

    $resultado = mysqli_query($conexao, $sql)
    or die (mysqli_error($conexao));

    $alimentos = [];

    while ($alimento = mysqli_fetch_assoc($resultado)){
        array_push($alimentos, $alimento);
     }
     return $alimentos;
} 

function readAllDrinks($conexao){
    $sql = "SELECT id, imagem, titulo, preco, resumo FROM bebidas";

    $resultado = mysqli_query($conexao, $sql)
    or die (mysqli_error($conexao));

    $alimentos = [];

    while ($alimento = mysqli_fetch_assoc($resultado)){
        array_push($alimentos, $alimento);
     }
     return $alimentos;
} 

function readAllCandys($conexao){
    $sql = "SELECT id, imagem, titulo, preco, resumo FROM doces";

    $resultado = mysqli_query($conexao, $sql)
    or die (mysqli_error($conexao));

    $alimentos = [];

    while ($alimento = mysqli_fetch_assoc($resultado)){
        array_push($alimentos, $alimento);
     }
     return $alimentos;
} 
