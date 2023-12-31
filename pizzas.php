<?php
require "inc/food-functions.php";

$pizzas = readAllPizzas($conexao); 

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasa Divina - Pizzas</title>
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
                    <li> <a class="cta" href="#google"><img src="imagens/icon-carrinho.svg" alt=""></a>
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
                    <div class="container-buttons">
                        <a href="login.php"><button class="login">Entrar</button></a>
                        <a href="register.php"><button class="register">Cadastre-se</button></a>
                    </div>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="highlight-pizzas">
            <h1>Pizzas</h1>
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
        <section id="container-pizzas">
            <div class="pizzas">
                <?php
                foreach ($pizzas as $pizza) { ?>
                    <article class="pizzas-box">
                        <img src=imagens/<?= $pizza['imagem'] ?> alt="pizza" class="product-image">
                        <div class="title-categories">
                            <h3 class="product-title"><?= $pizza["titulo"] ?></h3>
                            <h5 class="product-price">R$ <?= $pizza["preco"] ?>,00</h5>
                        </div>
                        <p><?= $pizza["resumo"] ?></p>
                        <button type="submit" class="button-add-cart" onclick="addedToCart()">Adicionar ao carrinho</button>
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
                        <li><a href="candys.php">Docess</a></li>
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
<script src="js/order.js"></script>

</html>