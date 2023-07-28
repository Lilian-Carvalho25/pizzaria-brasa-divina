<?php
require "inc/food-functions.php";

$drinks = readAllDrinks($conexao); 

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasa Divina - Bebidas</title>
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
                    <li><a href="#open-modal"><img src="imagens/icon-carrinho.svg" alt="ícone carrinho de compras"></a></li>
                    <div class="container-buttons">
                        <button class="login">Entrar</button>
                        <button class="register">Cadastre-se</button>
                    </div>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="highlight-drinks">
            <h1>Bebidas</h1>
        </section>

        <section class="food-menu">
            <h3>Selecione a categoria desejada:</h3>
            <div class="menu-alignment">
                <article class="icons-menu">
                    <a href="pizzas.php">
                        <img src="imagens/icon-pizza.svg" alt="ícone de pizza">
                    </a>
                    <h5>Pizzas</h5>
                </article>
                <article class="icons-menu">
                    <a href="drinks.php">
                        <img src="imagens/icon-bebidas.svg" alt="ícone de copo">
                    </a>
                    <h5>Bebidas</h5>
                </article>
                <article class="icons-menu">
                    <a href="candys.php">
                        <img src="imagens/icon-sobremesas.svg" alt="ícone sobremesa">
                    </a>
                    <h5>Doces</h5>
                </article>
            </div>
        </section>

        <section id="container-drinks">
            <div class="drinks">
                <?php
                foreach ($drinks as $drink) { ?>
                    <article class="drinks-box">
                        <img src=imagens/<?= $drink['imagem'] ?> alt="Bebida" class="product-image">
                        <div class="title-categories">
                            <h3 class="product-title"><?= $drink["titulo"] ?></h3>
                            <h5 class="product-price">R$ <?= $drink["preco"] ?>,00</h5>
                        </div>
                        <p><?= $drink["resumo"] ?></p>
                        <button type="submit" class="button-store">Adicionar ao carrinho</button>
                    </article>
                <?php } ?>
        </section>
    </main>

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

</body>

<script src="js/menu.js"></script>
<script src="js/store.js"></script>

</html>