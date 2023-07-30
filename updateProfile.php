<?php
require_once "inc/users-functions.php";
require_once "inc/sessions-functions.php";

if(isset($_GET["logout"])){
    logout();
}

// $id = $_GET["id"];
// $user = readUser($conexao, $id);


// if(isset($_POST['button-update'])){

// 	$nome = $_POST['nome'];
// 	$email = $_POST['email'];
// 	$cep = $_POST['cep'];
// 	$complemento = $_POST['complemento'];

// 	if(empty($_POST['senha']) || password_verify($_POST['senha'], $user['senha']) ) {
// 		$senha = $user["senha"];
// 	} else {
// 		$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);

// 	} 

// 	updateUser($conexao, $id, $nome, $email, $senha, $cep, $complemento);
// 	header("location:updateProfile.php");

// } 

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasa Divina - Atualizar perfil</title>
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
                    <li><a href=""><img src="imagens/icon-usuario.svg" alt="usuário" width="30px"></a></li>
                    <li><a href="?logout"><img src="imagens/icon-sair.svg" alt="usuário" width="30px"></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section class="food-menu">
            <h3>Selecione a área desejada:</h3>
            <div class="menu-alignment">
                <article class="icons-menu">
                    <a href="myPizzas.php">
                        <img src="imagens/icon-minhas-pizzas.svg" alt="ícone de pizza">
                    </a>
                    <h5>Minhas pizzas</h5>
                </article>
                <article class="icons-menu">
                    <a href="updateProfile.php">
                        <img src="imagens/icon-atualizar.svg" alt="ícone de usuário">
                    </a>
                    <h5>Atualizar perfil</h5>
                </article>
            </div>
        </section>

        <section id="container-update">
            <div class="update">
                <form action="">
                <div class="alignment-inputs">
                          <label for="name">Nome:</label>
                          <input value="<?=$user['nome']?>" type="text" name="name" id="name-input" required>
                      </div>

                      <div class="alignment-inputs">
                          <label for="email">E-mail:</label>
                          <input value="<?=$user['email']?>" type="email" name="email" id="email-update" required>
                      </div>

                      <div class="alignment-inputs">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha-update" required>
                    </div>

                    <div class="alignment-inputs">
                        <label for="cep">CEP:</label>
                        <input value="<?=$user['cep']?>" type="text" name="cep" id="cep-update" required>
                    </div>

                    <div class="alignment-inputs">
                        <label for="complemento">Complemento:</label>
                        <input value="<?=$user['complemento']?>" type="text" name="complemento" id="complemento-update" required>
                    </div>
                    <button type="submit" name="button-update">Atualizar</button>
                    </form>
            </div>
        </section>
    </main>
</body>
<script src="js/menu.js"></script>
<script src="js/store.js"></script>

</html>