<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Brasa Divina - Monte sua pizza</title>
  <link rel="shortcut icon" href="imagens/icon-brasa.svg" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header>
    <div class="limitador">
      <a href="index.php"><img src="imagens/Logo-brasa_divina.svg" alt="Logo brasa divina" class="logo"></a>
      <nav>
        <h2><a href="" class="icone"> <img src="imagens/icon-menu.svg" alt=""></a></h2>
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
    <section id="highlight-assemble">
      <h1>Monte sua pizza</h1>
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

    <section id="container-rules">
      <div class="rules">
      <h2>Como funciona a <span>montagem?</span></h2>
      <p>Você pode selecionar apenas uma opção de massa e molho, e escolher quantos recheios desejar. Lembrando que não é recomendado misturar recheios doces e salgados. O preço para pizzas personalizadas é <span>40 reais</span>, divirta-se!</p>
      <h4><span>Dica:</span> Clique nos ingredientes para selecioná-los <img src="imagens/clique.svg" alt="icone mão clicando"></h4>
      </div>
    </section>

    <section id="container-pasta">
      <h2>1. Escolha o tamanho da <span>massa</span></h2>
      <div class="pasta">
        <article class="size-pasta" onclick="selecionarProduto(this)">
          <img src="imagens/massa-pequena.png" alt="massa de pizza pequena">
          <h4>Massa pequena</h4>
          <p><span>30cm</span></p>
        </article>

        <article class="size-pasta" onclick="selecionarProduto(this)">
          <img class="average" src="imagens/massa-media.png" alt="massa de pizza média">
          <h4>Massa média</h4>
          <p><span>35cm</span></p>
        </article>

        <article class="size-pasta" onclick="selecionarProduto(this)">
          <img src="imagens/massa-grande.png" alt="massa de pizza grande">
          <h4>Massa grande</h4>
          <p><span>40cm</span></p>
        </article>
      </div>
    </section>

    <section id="container-sauces">
      <h2>2. Selecione o molho <span>desejado</span></h2>
      <div class="sauces">
        <article class="types-sauces" onclick="selecionarProduto(this)">
          <img src="imagens/molho-marinara.png" alt="molho marinara">
          <h4>Marinara</h4>
          <p><span>60mls</span></p>
        </article>

        <article class="types-sauces" onclick="selecionarProduto(this)">
          <img src="imagens/molho-de-queijo.png" alt="molho cheddar">
          <h4>Cheddar</h4>
          <p><span>60mls</span></p>
        </article>

        <article class="types-sauces" onclick="selecionarProduto(this)">
          <img src="imagens/molho-barbecue.png" alt="molho barbecue">
          <h4>Barbecue</h4>
          <p><span>60mls</span></p>
        </article>

        <article class="types-sauces" onclick="selecionarProduto(this)">
          <img src="imagens/molho-bechamel.png" alt="molho bechamel">
          <h4>Bechamel</h4>
          <p><span>60mls</span></p>
        </article>
      </div>
    </section>

    <section id="container-fillings">
      <h2>3. Divirta-se com os <span>recheios</span></h2>
      <h3>Recheios salgados</h3>
      <div class="fillings">
        <article class="types-fillings" onclick="selecionarProduto(this)">
          <img src="imagens/mussarela.png" alt="mussarela">
          <h4>Mussarela</h4>
          <p><span>80 gramas</span></p>
        </article>

        <article class="types-fillings" onclick="selecionarProduto(this)">
          <img src="imagens/salame.png" alt="salame">
          <h4>Salame</h4>
          <p><span>80 gramas</span></p>
        </article>

        <article class="types-fillings" onclick="selecionarProduto(this)">
          <img src="imagens/presunto.png" alt="presunto">
          <h4>Presunto</h4>
          <p><span>80 gramas</span></p>
        </article>

        <article class="types-fillings" onclick="selecionarProduto(this)">
          <img src="imagens/bacon.png" alt="bacon">
          <h4>Bacon</h4>
          <p><span>80 gramas</span></p>
        </article>

        <article class="types-fillings" onclick="selecionarProduto(this)">
          <img src="imagens/abacaxi.png" alt="abacaxi">
          <h4>Abacaxi</h4>
          <p><span>80 gramas</span></p>
        </article>

        <article class="types-fillings" onclick="selecionarProduto(this)">
          <img src="imagens/cogumelos.png" alt="cogumelos">
          <h4>Cogumelos</h4>
          <p><span>80 gramas</span></p>
        </article>

        <article class="types-fillings" onclick="selecionarProduto(this)">
          <img src="imagens/pimenta.png" alt="pimenta">
          <h4>Pimentas</h4>
          <p><span>60 gramas</span></p>
        </article>

        <article class="types-fillings" onclick="selecionarProduto(this)">
          <img src="imagens/camarao.png" alt="camarão">
          <h4>Camarões</h4>
          <p><span>80 gramas</span></p>
        </article>

        <article class="types-fillings" onclick="selecionarProduto(this)">
          <img src="imagens/pimentao.png" alt="pimentão">
          <h4>Pimentão</h4>
          <p><span>60 gramas</span></p>
        </article>

        <article class="types-fillings" onclick="selecionarProduto(this)">
          <img src="imagens/alho.png" alt="alho">
          <h4>Alho frito</h4>
          <p><span>70 gramas</span></p>
        </article>

        <article class="types-fillings" onclick="selecionarProduto(this)">
          <img src="imagens/brocolis.png" alt="brócolis">
          <h4>Brócolis</h4>
          <p><span>60 gramas</span></p>
        </article>

        <article class="types-fillings" onclick="selecionarProduto(this)">
          <img src="imagens/milho.png" alt="milho">
          <h4>Milho</h4>
          <p><span>80 gramas</span></p>
        </article>
      </div>

      <h3>Recheios doces</h3>
        <div class="fillings">
            <article class="types-fillings-candy" onclick="selecionarProduto(this)">
              <img src="imagens/chocolate.png" alt="chocolate">
              <h4>Chocolate</h4>
              <p><span>100 gramas</span></p>
            </article>
            <article class="types-fillings-candy" onclick="selecionarProduto(this)">
              <img src="imagens/chocolate-branco.png" alt="chocolate branco">
              <h4>Chocolate branco</h4>
              <p><span>100 gramas</span></p>
            </article>
            <article class="types-fillings-candy" onclick="selecionarProduto(this)">
              <img src="imagens/morango.png" alt="morango">
              <h4>Morangos</h4>
              <p><span>80 gramas</span></p>
            </article>
            <article class="types-fillings-candy" onclick="selecionarProduto(this)">
              <img src="imagens/coco.png" alt="coco">
              <h4>Coco</h4>
              <p><span>80 gramas</span></p>
            </article>
        </div>
    </section>

    <section id="container-name">
      <h2>2. Dê um nome a sua <span>receita</span></h2>
      <div class="name">
        <form action="">
          <label for="">Nome da sua pizza:</label>
          <input type="text" name="name-pizza" id="name-pizza" autocomplete="off">
          <p id="opcoesSelecionadas"><span>Opções selecionadas: </span> </p>
          <button type="submit" class="button-add-cart">Adicionar ao carrinho</button>
        </form>
      </div>
    </section>

  </main>

  <footer class="site-footer">
    <div class="container">
      <div class="row big-screen">
        <div class="col-sm-12 col-md-6 adjustment-footer">
          <h6>Sobre</h6>
          <p class="text-justify sobre">A Brasa Divina é uma pizzaria que se destaca pelos seus rigorosos padrões de
            qualidade. Desde a seleção cuidadosa dos ingredientes até a meticulosa preparação das pizzas, tudo é feito
            com dedicação e excelência.</p>
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
<script src="js/selectionIngredients.js"></script>
<script src="js/store.js"></script>

</html>