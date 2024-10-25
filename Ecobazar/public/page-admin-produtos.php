<?php

require_once '../config/config_session.php';
require_once '../config/database.php';

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- My CSS-->
    <link rel="stylesheet" href="css/style-admin.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Admin Page|EcoBazar</title>
</head>

<body>


    <!--barra lateral-->
    <section id="barra-lateral">
        <a href="#" class="marca">
            <i class='bx bxs-smile'></i>
            <span class="texto">EcoBazar</span>
        </a>
        <ul class="menu-lateral topo">
            <li >
                <a href="page-admin.php">
                    <i class='bx bxs-dashboard'></i>
                    <span class="texto">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bxs-gift'></i>
                    <span class="texto">Encomendas</span>
                </a>
            </li>
            <li class="active">
                <a href="page-admin-produtos.php">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="texto">Gerir Produtos</span>
                </a>
            </li>
            <li >
                <a href="page-admin-user.php">
                    <i class='bx bxs-group'></i>
                    <span class="texto">Gerir Usúarios</span>
                </a>
            </li>
        </ul>
        <ul class="menu-lateral">
            <form action="">
                <li>
                    <a href="../app/include/logout.inc.php" class="terminar-sessao">
                        <i class='bx bxs-log-out'></i>
                        <span class="texto">Terminar Sessão</span>
                    </a>
                </li>
            </form>
        </ul>
    </section>
    <!--barra lateral-->



    <!--conteudo-->
    <section id="conteudo">
        
        <!--barra-navegacao-->
        <nav>
            <i class="bx bx-menu"></i>
            <a href="#" class="nav-link">Painel do Administrador</a>
            <a href="#" class="perfil">
                <!-- <img src="img/people.png"> -->
            </a>
        </nav>
        <!--barra-navegacao-->

        <!--Principal-->
        <main>
            <div class="titulo-principal">
                <div class="left">
                    <h1>Gerir produtos</h1>
                </div>

                <button class="bto-download bx bx-plus" id="button"> <span class="text">adicionar Produtos</span> </button>

                <a href="" class="bto-download">
                    <i class='bx bx-plus'></i>
                    <span class="text">adicionar Produtos</span>
                </a>
            </div>

            <section class="produto">

                <div class="box-container">

                    <?php

                        $select_products = $pdo->prepare("SELECT * FROM Produtos ;");
                        $select_products->execute();
                        if($select_products->rowCount() > 0 ){

                        while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){

                    ?>

                    <form action="" method="POST" class="box">
                        <input type="hidden" name="Produto_id" value="<?= $fetch_product['id']; ?>">
                        <div class="row products mini">

                            <!-- PRODUTO -->

                            <div class="item">

                                <div class="media">
                                    <div class="thumbnail object-cover">
                                        <a href="#">
                                            <img src="../app/include/<?php echo $fetch_product['image']; ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="hoverable">
                                        <ul>
                                            <li class="active"><a href="#"><i class="ri-shopping-cart-2-line"></i></a></li>
                                            <li><a href="#"><i class="ri-eye-line"></i></a></li>
                                            
                                        </ul>
                                    </div>
                                    <!-- <div class="discount circle flexcenter"><span>32%</span></div> -->
                                </div>

                                <div class="content">
                                    <h3 class="main-links"><a href="page-produto.php"><?= $fetch_product['nome']; ?></a></h3>

                                    <div class="rating">
                                    <span class="mini-text">ainda n sei</span>
                                    </div>

                                    <div class="price">
                                    <span class="current"><?= $fetch_product['price']; ?>Kz</span>
                                    <!-- <span class="normal mini-text">3.944,00kz</span> -->
                                    </div>
                                    <div class="mini-text">
                                        <p>stock <?= $fetch_product['stock']; ?></p>
                                        <p><?= $fetch_product['marca']; ?></p>
                                        <p><?= $fetch_product['fornecedor']; ?></p>
                                    </div>
                                </div>

                            </div>

                        </div>
                
                    </form>

                    <?php

                        }

                        }else{
                            echo "<p>aqui acabou</p>";
                        }

                    ?>
                    
                </div>
                
            </section>

            <?= require_once 'parts/add-produto.php'?>
            
        </main>

        <!--Principal-->

    </section>
    <!--conteudo-->

    

    <script src="js/js-admin.js"></script>
    <script src="js/joke.js"></script>
</body>

</html>