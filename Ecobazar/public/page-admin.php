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
            <li class="active">
                <a href="#">
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
            <li>
                <a href="page-admin-produtos.php">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="texto">Gerir Produtos</span>
                </a>
            </li>
            <li>
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
            <i class='bx bx-menu'></i>
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
                    <h1>Painel de controlo</h1>
                    <ul class="migalhas">
                        <li>
                            <a href="#">Painel de controlo</a>
                        </li>
                        <li><i class='bx bxs-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Casa</a>
                        </li>
                    </ul>
                </div>
                <!-- <a href="#" class="bto-download">
                    <i class='bx bxs-cloud-download'></i>
                    <span class="text">Download PDF</span>
                </a> -->
            </div>

            <ul class="caixa-info">
                <li>
                    <i class='bx bxs-calendar-check'></i>
                    <span class="text">
                        <h3>1</h3>
                        <p>Novos Pedido</p>
                    </span>
                </li>
                <li>
                    <i class='bx bxs-dollar-circle'></i>
                    <span class="text">
                        <h3>1430.00kz</h3>
                        <p>Vendas Totais</p>
                    </span>
                </li>
            </ul>


            <div class="dados-tabela">
                <div class="pedido">
                    <div class="cabeca">
                        <h3>Econmenda Recente</h3>
                        <i class='bx bx-search'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <table>
                    <thead>
                            <tr>
                                <th>id de cliente</th>
                                <th>Nome</th>
                                <th>Apelido</th>
                                <th>E-mail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $query = "SELECT * FROM Clientes WHERE usertype = 'user' LIMIT 5 ;";
                                $stmt = $pdo->prepare($query);
                                $stmt->execute();

                                $result = $stmt->fetchAll();
                                if($result){

                                    foreach($result as $item){
                                        ?>
                                            <tr>
                                                <td><?= $item['id']; ?></td>
                                                <td><?= $item['nome']; ?></td>
                                                <td><?= $item['apelido']; ?></td>
                                                <td><?= $item['email']; ?></td>
                                            </tr>
                                        <?php
                                    }

                                }else{
                                    ?>
                                        <tr>
                                            <td colspan="4">no record found</td>
                                        </tr>
                                    <?php
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="tarefa">
                    <div class="cabeca">
                        <h3>Tarefas</h3>
                        <i class='bx bx-plus'></i>
                        <i class='bx bx-filter'></i>
                    </div>
                    <ul class="lista-tarefa">
                        <li class="nao-concluido">
                            <p>adicionar produtos</p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="concluido">
                            <p>Ver clientes</p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <!-- <li class="nao-concluido">
                            <p></p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="concluido">
                            <p>Lista de Tarefas</p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li>
                        <li class="nao-concluido">
                            <p>Lista de Tarefas</p>
                            <i class='bx bx-dots-vertical-rounded'></i>
                        </li> -->
                    </ul>
                </div>
            </div>
        </main>

        <!--Principal-->

    </section>
    <!--conteudo-->

    <script src="js/js-admin.js"></script>
</body>

</html>