<?php
require_once "inc/sessions-functions.php";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Brasa Divina </title>
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
                    <div class="container-buttons">
                        <a href="login.php"><button class="login">Entrar</button></a>
                        <a href="register.php"><button class="register">Cadastre-se</button></a>
                    </div>
                </ul>
            </nav>
        </div>
    </header>

    <main>

        <section id="highlight-home">
            <h1>O seu paladar <span>merece.</span></h1>
            <button>Explorar o menu</button>
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

        <section id="container-quality">
            <img src="imagens/destaque-qualidade.png" alt="Homem de dólma">
            <div class="quality">
                <h2>Qualidade e <span>sabor</span>, em cada fatia.</h2>
                <p>A pizzaria Brasa Divina se destaca pelos seus padrões de qualidade impecáveis. Desde a seleção criteriosa
                    dos ingredientes até a preparação cuidadosa de cada pizza, tudo é feito com excelência. Os ingredientes
                    frescos e de alta qualidade são combinados habilmente pela equipe experiente, resultando em pizzas
                    saborosas e generosamente cobertas. Além disso, o atendimento ao cliente é caloroso e atencioso,
                    proporcionando uma experiência agradável.</p>
            </div>
        </section>

        <section id="container-pizzas-popular">
            <h2>Pizzas mais populares</h2>

            <div class="pizzas-popular">
                <article class="pizza-box">
                    <img src="imagens/pizza-calabresa.png" alt="pizza de calabresa" class="product-image">
                    <div class="title-categories">
                        <h3 class="product-title">Calabresa</h3>
                        <h5 class="product-price">R$ 30,00</h5>
                    </div>
                    <p>Mussarela, calabresa trufada, cebola, molho marinara e orégano.</p>
                    <button type="submit" class="button-add-cart">Adicionar ao carrinho</button>
                </article>

                <article class="pizza-box">
                    <img src="imagens/pizza-baiana.png" alt="pizza baiana" class="product-image">
                    <div class="title-categories">
                        <h3 class="product-title">Baiana</h3>
                        <h5 class="product-price">R$ 30,00</h5>
                    </div>
                    <p>Mussarela, tomates, milho, pimenta, pimentão e molho marinara.</p>
                    <button type="submit" class="button-add-cart">Adicionar ao carrinho</button>
                </article>

                <article class="pizza-box">
                    <img src="imagens/pizza-calabacon.png" alt="pizza calabacon" class="product-image">
                    <div class="title-categories">
                        <h3 class="product-title">Calabacon</h3>
                        <h5 class="product-price">R$ 30,00</h5>
                    </div>
                    <p>Mussarela, bacon, molho marinara, tomates, cogumelos e orégano.</p>
                    <button type="submit" class="button-add-cart">Adicionar ao carrinho</button>
                </article>
            </div>
        </section>

        <section id="container-delivery">
            <img class="deliveryman" src="imagens/foto-entregador.png" alt="Entregador de pizza">
            <div class="delivery">
                <h2>Peça sua pizza de forma simples <span>simples.</span></h2>
                <article class="icons-delivery">
                    <img src="imagens/icon-atendente.svg" alt="ícone atendente">
                    <h4>Atendentes atenciosos e eficientes.</h4>
                </article>
                <article class="icons-delivery">
                    <img src="imagens/icon-entrega.svg" alt="ícone motoboy">
                    <h4>Entrega rápida, pizza fresca e quente!</h4>
                </article>
                <article class="icons-delivery">
                    <img src="imagens/icon-moeda.svg" alt="ícone moeda">
                    <h4>Preços acessíveis, opções flexíveis.</h4>
                </article>
            </div>
        </section>

        <section id="container-candy-popular">
            <h2>Doces mais populares</h2>

            <div class="candy-popular">
                <article class="candy-box">
                    <img src="imagens/pizza-banana-c-chocolate.png" alt="pizza de banana" class="product-image">
                    <div class="title-categories">
                        <h3 class="product-title">Bananas</h3>
                        <h5 class="product-price">R$ 30,00</h5>
                    </div>
                    <p>Chocolate ao leite e bananas assadas com mel e cravos.</p>
                    <button type="submit" class="button-add-cart">Adicionar ao carrinho</button>
                </article>

                <article class="candy-box">
                    <img src="imagens/pizza-chocolate-c-morango.png" alt="pizza de morango" class="product-image">
                    <div class="title-categories">
                        <h3 class="product-title">Morangos</h3>
                        <h5 class="product-price">R$ 30,00</h5>
                    </div>
                    <p>Chocolate meio amargo, leite condensado e morangos.</p>
                    <button type="submit" class="button-add-cart">Adicionar ao carrinho</button>
                </article>

                <article class="candy-box">
                    <img src="imagens/pizza-frutas.png" alt="pizza de frutas" class="product-image">
                    <div class="title-categories">
                        <h3 class="product-title">Frutas</h3>
                        <h5 class="product-price">R$ 30,00</h5>
                    </div>
                    <p>Chocolate ao leite, morangos, bananas, kiwis, amoras, etc.</p>
                    <button type="submit" class="button-add-cart">Adicionar ao carrinho</button>
                </article>
            </div>
        </section>

        <section id="container-application">
            <img class="screen" src="imagens/tela-app.png" alt="Aplicativo brasa divina">
            <div class="application">
                <h2>Busca <span>praticidade</span>? Baixe nosso app!</h2>
                <p>Agora, você pode desfrutar de uma experiência conveniente e rápida ao fazer seus pedidos. Com apenas alguns toques na tela do seu aparelho.
                    Além disso, nosso app oferece o recurso de rastreamento em tempo real, permitindo que você acompanhe a sua entrega do início ao fim. E para tornar tudo ainda mais especial, oferecemos promoções exclusivas.</p>
                <h6>Disponível em:</h6>
                <img src="imagens/icons-disponibilidade.png" alt="Play store e App store">
            </div>
        </section>

        <section id="container-contact">
            <h2>Entre em contato conosco</h2>
            <div class="contact">
                <article class="icons-contact">
                    <img src="imagens/icon-telefone.svg" alt="ícone telefone">
                    <h4>Telefone:</h4>
                    <a href="tel:11935636815">(11) 93563-6815</a>
                </article>
                <article class="icons-contact">
                    <img src="imagens/icon-pino-de-localizacao.svg" alt="ícone localização">
                    <h4>Localização:</h4>
                    <a href="https://www.google.com.br/maps/place/Av.+Paulista+-+Bela+Vista,+S%C3%A3o+Paulo+-+SP/@-23.5657344,-46.6538128,17z/data=!3m1!4b1!4m6!3m5!1s0x94ce59c8da0aa315:0xd59f9431f2c9776a!8m2!3d-23.5657393!4d-46.6512379!16zL20vMDNiNzU4?entry=ttu" target="_blank">Rua Luz - 1800</a>
                </article>
                <article class="icons-contact">
                    <img src="imagens/icon-whatsapp.svg" alt="ícone whatsapp">
                    <h4>Whatsapp:</h4>
                    <a href="tel:11953781049">(11) 95378-1049</a>
                </article>
            </div>
        </section>

        <section id="container-feedback">
            <h2>Feedbacks dos usuários</h2>
            <div class="feedbacks">
                <article class="feedback-box">
                    <img class="icon-perfil" src="imagens/foto-pessoa-1.png" alt="Lais Carvalho">
                    <h4>Lais Carvalho</h4>
                    <img src="imagens/icon-estrelas.svg" alt="ícone cinco estrelas">
                    <p>Este site é fantástico! A navegação é intuitiva, facilitando a escolha dos sabores e a opção de personalização das pizzas é incrível!</p>
                </article>
                <article class="feedback-box">
                    <img class="icon-perfil" src="imagens/foto-pessoa-2.png" alt="Paulo Ferreira">
                    <h4>Paulo Ferreira</h4>
                    <img src="imagens/icon-estrelas.svg" alt="ícone cinco estrelas">
                    <p>Encontrei todas as informações que precisava facilmente, e fazer o pedido foi rápido e prático. A entrega foi pontual e a pizza estava divina!</p>
                </article>
                <article class="feedback-box">
                    <img class="icon-perfil" src="imagens/foto-pessoa-3.png" alt="Lara Silva">
                    <h4>Lara Silva</h4>
                    <img src="imagens/icon-estrelas.svg" alt="ícone cinco estrelas">
                    <p>Além de ter um design moderno, é muito intuitivo. Fazer o pedido pelo site foi uma experiência suave e a entrega foi rápida. Muita praticidade.</p>
                </article>
            </div>
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