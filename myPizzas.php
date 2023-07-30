<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasa Divina - Minhas Pizzas</title>
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
                    <li><a href=""><img src="imagens/icon-sair.svg" alt="usuário" width="30px"></a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>

        <section class="food-menu">
            <h3>Selecione a área desejada:</h3>
            <div class="menu-alignment">
                <article class="icons-menu">
                    <a href="">
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

        <section id="container-my-pizzas">
            <div class="my-pizzas">
                <article class="my-pizzas-box">
                    <img src="imagens/icon-caixa-de-pizza.svg" alt="ícone caixa de pizza">
                    <div>
                        <h3>Explosão de sabores</h3>
                        <p><span>Massa:</span> média; <span>Molho:</span> marinara; <span>Recheios:</span> mussarela, salame, brócolis e milho. </p>
                        <button type="submit" name="finalizar-pedido">Finalizar pedido</button>
                    </div>
                </article>

                <article class="my-pizzas-box">
                    <img src="imagens/icon-caixa-de-pizza.svg" alt="Ícone caixa de pizza">
                    <div>
                        <h3>Pedido de toda semana</h3>
                        <p><span>Massa:</span> média; <span>Molho:</span> bechamel; <span>Recheios:</span> abacaxi, milho, brócolis, pimentões e alho frito. </p>
                        <button type="submit" name="finalizar-pedido">Finalizar pedido</button>
                    </div>
                </article>

                <article class="my-pizzas-box">
                    <img src="imagens/icon-caixa-de-pizza.svg" alt="Ícone caixa de pizza">
                    <div>
                        <h3>Pizza sensacional</h3>
                        <p><span>Massa:</span> grande; <span>Molho:</span> cheddar; <span>Recheios:</span> mussarela, bacon, presunto e abacaxi. </p>
                        <button type="submit" name="finalizar-pedido">Finalizar pedido</button>
                    </div>
                </article>

                <article class="my-pizzas-box space">
                    <img src="imagens/icon-caixa-de-pizza.svg" alt="Ícone caixa de pizza">
                    <div>
                        <h3>Sonho doce</h3>
                        <p><span>Massa:</span> pequena; <span>Molho:</span> sem molho; <span>Recheios:</span> chocolate ao leite, chocolate branco e morangos. </p>
                        <button type="submit" name="finalizar-pedido">Finalizar pedido</button>
                    </div>
                </article>
            </div>
        </section>
    </main>
</body>
<script src="js/menu.js"></script>
<script src="js/store.js"></script>

</html>