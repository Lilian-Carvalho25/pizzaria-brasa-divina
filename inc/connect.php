<?php 

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "brasa-divina";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
mysqli_set_charset($conexao, "utf8");

if( !$conexao ){
    die(mysqli_connect_error($conexao));
} /*else {
    echo "<p>Beleza, banco conectado!</p>";
} */

?>