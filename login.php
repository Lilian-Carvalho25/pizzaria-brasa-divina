<?php 
require_once "inc/sessions-functions.php";
require_once "inc/users-functions.php";


if(isset($_GET["campos_obrigatorios"]) ){

	$message = "Você deve preencher e-mail e senha!";
} elseif(isset($_GET["dados_incorretos"])){
	$message = "Dados incorretos, verifique e-mail e/ou senha!";
} elseif(isset($_GET["logout"])){
	$message = "Voce saiu do sistema.";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Brasa Divina - Login </title>
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
                    <li><a class="cta" href="#google"><img src="imagens/icon-carrinho.svg" alt=""></a>
                        <div id="google" class="modaloverlay">
                            <div class="modal">
                                <a href="#close" class="close">&times;</a>
                                <div>
                                    <section class="container normal-section">
                                        <h2 class="section-title">Carrinho</h2>

                                        <table class="cart-table">
                                            <thead>
                                                <tr>
                                                    <th class="table-head-item first-col">Item</th>
                                                    <th class="table-head-item second-col">Preço</th>
                                                    <th class="table-head-item third-col">Quantidade</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <td colspan="3" class="cart-total-container">
                                                        <strong>Total</strong>
                                                        <span>R$0,00</span>
                                                    </td>
                                                </tr>
                                            </tfoot>
                                        </table>

                                        <button type="button" class="purchase-button">Finalizar Compra</button>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </header>

    <main>

        <section id="container-login">
            <div class="login-page">
                <h1>Olá! Bem vindo(a) de volta!</h1>

                <?php if(isset($message)) {?>
                    <p class="feedback-login-and-register">
                    <?=$message?>
                    </p>   
                <?php } ?>

                    <form action="" method="post">
                      <div class="alignment-inputs">
                          <label for="email">E-mail:</label>
                          <input type="email" name="email" id="email-login">
                      </div>

                      <div class="alignment-inputs">
                        <label for="senha">Senha:</label>
                        <input type="password" name="senha" id="senha-login">
                    </div>
                    <button type="submit" name="button-login" class="login-register">Entrar</button>
                    <a href="register.php">Não tem cadastro? Faça agora mesmo!</a>
                    </form>
            </div>
        </section>

        <?php
            
            if(isset($_POST["button-login"])){
            
                if(empty($_POST["email"]) || empty($_POST["senha"])){
                    header("location:login.php?campos_obrigatorios");
                    exit;
            
                }
            
                $email = $_POST['email'];
                $senha = $_POST['senha'];
            
                $dataUser = searchUser($conexao, $email);
            
                if( $dataUser != null && password_verify($senha, $dataUser['senha'])) {
            
                    login($dataUser['id'], $dataUser['email'], $dataUser['tipo']);
                    header("location:myPizzas.php");
                    exit;
            
                } else {
                    header("location:login.php?dados_incorretos");
                    exit;
                }
            } 
            
            ?>
    </main>
</body>

<script src="js/menu.js"></script>
</html>