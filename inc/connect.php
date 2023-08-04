<?php 

// $servidor = "localhost";
// $usuario = "root";
// $senha = "";
// $banco = "brasa-divina";

$servidor = "localhost";
$usuario = "id21104323_brasadivina";
$senha = "!Lila2503";
$banco = "id21104323_brasadivina";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
mysqli_set_charset($conexao, "utf8");

if( !$conexao ){
    die(mysqli_connect_error($conexao));
} /*else {
    echo "<p>Beleza, banco conectado!</p>";
} */

?>