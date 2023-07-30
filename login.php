<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasa Divina - Login</title>
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
        <section id="container-login">
            <div class="login-page">
                <h1>Olá! Bem vindo(a) de volta!</h1>

                    <p class="feedback-login-and-register">
                        Mensagem area de login
                    </p>   

                    <form action="">
                      <div class="alignment-inputs">
                          <label for="">E-mail:</label>
                          <input type="email" name="email" id="email-login" required>
                      </div>

                      <div class="alignment-inputs">
                        <label for="">Senha:</label>
                        <input type="password" name="senha" id="senha-login" required>
                    </div>
                    <button type="submit" name="button-login">Entrar</button>
                    <a href="register.php">Não tem cadastro? Faça agora mesmo!</a>
                    </form>
            </div>
        </section>
    </main>
</body>

<script src="js/menu.js"></script>
</html>