<?php 
$pageTitle = "Brasa Divina - Login"; 
include 'inc/header-logged-off.php';
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
                    <button type="submit" name="button-login">Entrar</button>
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
            
                    login($dataUser['id'], $dataUser['email']);
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