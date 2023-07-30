<?php 
require_once "inc/users-functions.php";

// if($_SESSION['tipo'] != "admin"){
// 	header("location:nao-autorizado.php");
// }

if(isset($_POST['button-register'])){

	$nome = $_POST['name'];
	$email = $_POST['email'];
	$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
	$cep = $_POST['cep'];
	$complemento = $_POST['complemento'];

	insertUser($conexao, $nome, $email, $senha, $cep, $complemento, $tipo);
	header("location:myPizzas.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasa Divina - Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>

        <div class="limitador">
            <a href="index.php"><img src="imagens/Logo-brasa_divina.svg" alt="Logo brasa divina" class="logo"></a>
            <nav>
                <h2><a href="" class="icone"> <img src="imagens/icon-menu.svg" alt=""> </a></h2>
                <ul class="menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="aboutUs.php" class="special2">Sobre nós</a></li>
                    <li><a href="assemblePizza.php" class="special">Monte sua pizza</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="container-register">
            <div class="register-page">
                <h1>Seja bem vindo(a)!</h1>

                <p class="feedback-login-and-register">
                    Mensagem area de login
                </p>

                <form action="" method="post">
                    <div class="alignment-inputs">
                        <label for="">Nome:</label>
                        <input type="text" name="name" id="name-register" required>
                    </div>

                    <div class="email-and-password">
                        <div class="alignment-inputs">
                            <label for="">E-mail:</label>
                            <input type="email" name="email" id="email-register" required>
                        </div>
                        <div class="alignment-inputs">
                            <label for="">Senha:</label>
                            <input type="password" name="senha" id="senha-register" required>
                        </div>
                    </div>

                    <div class="cep-and-cmp">
                        <div class="alignment-inputs">
                            <label for="">CEP:</label>
                            <input type="text" name="cep" id="cep-register">
                        </div>
                        <div class="alignment-inputs">
                            <label for="">Complemento:</label>
                            <input type="text" name="complemento" id="complemento-register" required>
                        </div>
                    </div>
                    <button type="submit" name="button-register">Cadastrar</button>
                    <a href="login.php">Já tem cadastro? Faça login agora mesmo!</a>
                </form>
            </div>
        </section>
    </main>
</body>

<script src="js/menu.js"></script>

</html>