<?php
require_once "inc/users-functions.php";
require_once "inc/sessions-functions.php";
verifyAccess();

if(isset($_GET["logout"])){
    logout();
}

$allUsers = readAllUsers($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasa Divina - Pedidos</title>
    <link rel="shortcut icon" href="imagens/icon-brasa.svg" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header>
        <div class="limitador">
            <a href=""><img src="imagens/Logo-brasa_divina.svg" alt="Logo brasa divina" class="logo"></a>
            <nav>
                <h2><a href="" class="icone"> <img src="imagens/icon-menu.svg" alt=""> </a></h2>
                <ul class="menu">
                    <li><a href="?logout"><img src="imagens/icon-sair.svg" alt="usuário" width="30px"  class="exit"></a></li>
                </ul>
            </nav>
        </div>
    </header>

<main>
    <section id="highlight-requests">
        <h1>Visualização de pedidos</h1>
    </section>

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
                    <a href="requests.php">
                        <img src="imagens/icon-pedido.svg" alt="ícone de caderneta">
                    </a>
                    <h5>Pedidos</h5>
                </article>
                <article class="icons-menu">
                    <a href="updateProfile.php">
                        <img src="imagens/icon-atualizar.svg" alt="ícone de usuário">
                    </a>
                    <h5>Atualizar perfil</h5>
                </article>
            </div>
        </section>

    <section id="container-requests">
        <div class="requests">
            <article class="order-box">
                <img src="imagens/icon-pedido-cliente.svg" alt="ícone pedido">
                <div>
                    <h3>Valeska Marques</h3>
                    <p><span>Pizza:</span> Calabacon e mussarela. <span>Sobremesa:</span> Banana e cookies. <span>Bebida:</span> R. de Cola</p>
                    <button type="submit" name="finalizar-pedido" onclick="finalizeOrder()">Finalizar pedido</button>
                </div>
            </article>

            <article class="order-box">
                <img src="imagens/icon-pedido-cliente.svg" alt="ícone pedido">
                <div>
                    <h3>Valeska Marques</h3>
                    <p><span>Pizza:</span> Calabacon e mussarela. <span>Sobremesa:</span> Banana e cookies. <span>Bebida:</span> R. de Cola</p>
                    <button type="submit" name="finalizar-pedido" onclick="finalizeOrder()">Finalizar pedido</button>
                </div>
            </article>

            <article class="order-box">
                <img src="imagens/icon-pedido-cliente.svg" alt="ícone pedido">
                <div>
                    <h3>Valeska Marques</h3>
                    <p><span>Pizza:</span> Calabacon e mussarela. <span>Sobremesa:</span> Banana e cookies. <span>Bebida:</span> R. de Cola</p>
                    <button type="submit" name="finalizar-pedido" onclick="finalizeOrder()">Finalizar pedido</button>
                </div>
            </article>

            <article class="order-box">
                <img src="imagens/icon-pedido-cliente.svg" alt="ícone pedido">
                <div>
                    <h3>Valeska Marques</h3>
                    <p><span>Pizza:</span> Calabacon e mussarela. <span>Sobremesa:</span> Banana e cookies. <span>Bebida:</span> R. de Cola</p>
                    <button type="submit" name="finalizar-pedido" onclick="finalizeOrder()">Finalizar pedido</button>
                </div>
            </article>

            <article class="order-box space">
                <img src="imagens/icon-pedido-cliente.svg" alt="ícone pedido">
                <div>
                    <h3>Valeska Marques</h3>
                    <p><span>Pizza:</span> Calabacon e mussarela. <span>Sobremesa:</span> Banana e cookies. <span>Bebida:</span> R. de Cola</p>
                    <button type="submit" name="finalizar-pedido" onclick="finalizeOrder()">Finalizar pedido</button>
                </div>
            </article>
        </div>
    </section>

    <footer class="site-footer">
        <div class="container">
            <div class="row big-screen">
                <div class="col-sm-12 col-md-6 adjustment-footer">
                    <h6>Sobre</h6>
                    <p class="text-justify sobre">A Brasa Divina é uma pizzaria que se destaca pelos seus rigorosos padrões de qualidade. Desde a seleção cuidadosa dos ingredientes até a meticulosa preparação das pizzas, tudo é feito com dedicação e excelência.</p>
                </div>

                <div class="col-xs-6 col-md-3 adjustment-footer">
                    <h6>Principais</h6>
                    <ul class="footer-links">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="aboutUs.php">Sobre nós</a></li>
                        <li><a href="assemblePizza.php">Monte sua pizza</a></li>
                    </ul>
                </div>

                <div class="col-xs-6 col-md-3 adjustment-footer">
                    <h6>Categorias</h6>
                    <ul class="footer-links">
                        <li><a href="pizzas.php">Pizzas</a></li>
                        <li><a href="drinks.php">Bebidas</a></li>
                        <li><a href="candys.php">Doces</a></li>
                    </ul>
                </div>
            </div>
            <hr>
        </div>
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6 col-xs-12 icons-footer">
                    <ul class="social-icons">
                        <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</main>
</body>
<script src="js/menu.js"></script>
<script src="js/store.js"></script>
<script src="js/order.js"></script>
</html>