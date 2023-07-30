<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?></title>
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