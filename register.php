<?php 
require_once "inc/users-functions.php";

if(isset($_GET["campos_obrigatorios"]) ){
	$message = "Você deve preencher os campos vazios!";
    exit;
} 

if(isset($_POST['button-register'])){

	$nome = $_POST['name'];
	$email = $_POST['email'];
	$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
	$cep = $_POST['cep'];
	$complemento = $_POST['complemento'];

	insertUser($conexao, $nome, $email, $senha, $cep, $complemento);
	header("location:login.php");
}

if(isset($_POST["button-register"])){

    if(empty($_POST["email"]) || empty($_POST["senha"]) || empty($_POST["cep"])  || empty($_POST["complemento"])){
        header("location:login.php?campos_obrigatorios");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasa Divina - Cadastro</title>
    <link rel="shortcut icon" href="imagens/icon-brasa.svg" type="image/x-icon">
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

                <?php if(isset($message)) {?>
                <p class="feedback-login-and-register">
                <?=$message?>
                </p>
                <?php } ?>

                <form action="" method="post">
                    <div class="alignment-inputs">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" id="name-register">
                    </div>

                    <div class="email-and-password">
                        <div class="alignment-inputs">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email-register">
                        </div>
                        <div class="alignment-inputs">
                            <label for="senha">Senha:</label>
                            <input type="password" name="senha" id="senha-register">
                        </div>
                    </div>

                    <div class="cep-and-cmp">
                        <div class="alignment-inputs">
                            <label for="cep">CEP:</label>
                            <input type="text" name="cep" id="cep-register">
                        </div>
                        <div class="alignment-inputs">
                            <label for="complemento">Complemento:</label>
                            <input type="text" name="complemento" id="complemento-register">
                        </div>
                    </div>
                    <button type="submit" name="button-register" class="login-register">Cadastrar</button>
                    <a href="login.php">Já tem cadastro? Faça login agora mesmo!</a>
                </form>
            </div>
        </section>
    </main>
</body>

<script src="js/menu.js"></script>

</html>