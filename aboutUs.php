<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brasa divina - Sobre nós</title>
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
                        <button class="login">Entrar</button>
                        <button class="register">Cadastre-se</button>
                    </div>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="highlight-aboutUs">
            <h1>Sobre nós</h1>
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

        <section id="container-team">
            <h2><span>Equipe</span> Brasa Divina</h2>
            <div class="team">
                <article class="cards-team">
                    <img src="imagens/Pizzaiolo.png" alt="Pizzaiolo">
                    <h3>Márcio Silva</h3>
                    <p>Chef de cozinha</p>
                </article>

                <article class="cards-team">
                    <img src="imagens/Pizzaiola.png" alt="Pizzaiola">
                    <h3>Claudia Lopes</h3>
                    <p>Chef de cozinha</p>
                </article>

                <article class="cards-team">
                    <img src="imagens/Garcom.png" alt="Garçom">
                    <h3>Caio Santos</h3>
                    <p>Garçom</p>
                </article>

                <article class="cards-team">
                    <img src="imagens/Garconete.png" alt="Garçonete">
                    <h3>Laura Paz</h3>
                    <p>Garçonete</p>
                </article>

                <article class="cards-team">
                    <img src="imagens/entregador-1.png" alt="Entregador">
                    <h3>Luis Souza</h3>
                    <p>Entregador</p>
                </article>

                <article class="cards-team">
                    <img src="imagens/entregador-2.png" alt="Entregador">
                    <h3>Lucas Lima</h3>
                    <p>Entregador</p>
                </article>
            </div>
        </section>

        <section id="container-history">
            <div class="history">
                <img src="imagens/nossa-historia.png" alt="Forno a lenha">
                <div>
                    <h2>Nossa história</h2>
                    <p>Brasa Divina, com mais de 25 anos de experiência no mercado, é conhecida por uma coisa em particular: o sabor delicioso das suas pizzas. A cada mordida, você é transportado para um mundo de sabores autênticos e irresistíveis. Cada pizza é cuidadosamente preparada, utilizando ingredientes frescos e de alta qualidade, combinados de forma harmoniosa para criar uma explosão de sabores inigualável. O segredo da Brasa Divina está na paixão pela pizza e na busca incessante pela perfeição. Cada fatia é uma experiência gastronômica memorável, que faz com que você retorne sempre em busca daquele sabor único e inesquecível.</p>
                </div>
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