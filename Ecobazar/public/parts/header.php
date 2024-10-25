<header>
      <div class="header-top mobile-hide">
        <div class="container">
          <div class="wrapper flexitem">
            <div class="left">
              <ul class="flexitem main-links">
                <?php if (isset($_SESSION["id_Clientes"])): ?>
                <li>Olá, <?=($_SESSION["nome_Clientes"])?> <?=($_SESSION["apelido_Clientes"])?></li>
                <li><a href="../app/include/logout.inc.php">sair</a></li>

              </ul>
            </div>
            
            <div class="right">
              <ul class="flexitem main-links">
                <li><a href="page-profile.php">minha conta</a></li>
                <!-- <li><a href="#">Minhas encomendas</a></li> -->
                <?php else: ?>
                <!-- <li><a href="login.php">login</a></li> -->
                
                <?php endif; ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- header-top -->

      <div class="header-nav">
        <div class="container">
          <div class="wrapper flexitem">
            <a href="#" class="trigger desktop-hide"><span class="i ri-menu-2-line"></span></a>
            <div class="left flexitem">
              <div class="logo">
                <a href="ecobazar.php"><span><i class="fa-solid fa-seedling"></i></span>EcoBazar</a>
              </div>
            </div>

            <div class="right">
              <ul class="flexitem second-links">
                
              <?php if (isset($_SESSION["id_Clientes"])): ?>
                <li class="mobile-hide"><a href="page-profile.php">
                  <div class="icon-large"><i class="ri-user-line"></i></div>
                </a></li>
              <?php else: ?>
                <li class="mobile-hide"><a href="page-login.php">
                  <div class="icon-large"><i class="ri-user-line"></i></div>
                </a></li>
              <?php endif; ?>
                <li><a href="page-carrinho.php" class="iscart">
                  <div class="icon-large">
                    <i class="ri-shopping-cart-line"></i>
                    <div class="fly-item"><span class="item-number">0</span></div>
                  </div>
                  <div class="icon-text">
                    <div class="mini-text">total</div>
                    <div class="cart-total">0kz</div>
                  </div>
                </a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- header nav -->

      <div class="header-main mobile-hide">
        <div class="container">
          <div class="wrapper flexitem">
            <div class="left">
              <div class="dpt-cat">
                <div class="dpt-head">
                  <div class="main-text">categorias</div>
                  <a href="#" class="dpt-trigger mobile-hide">
                    <i class="ri-menu-3-line ri-xl"></i>
                  </a>
                </div>
                <div class="dpt-menu a">
                  <ul class="second-links">
                    <li class="has-child" >
                      <a href="#">
                        <!-- <div class="icon-large"><i class="ri-bear-smile-line"></i></div> -->
                        merciaria
                        <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                      </a>
                      <ul>
                        <li><a href="#">café, chá</a></li>
                        <li><a href="#">cereais e barras</a></li>
                        <li><a href="#">bolachas, batatas</a></li>
                        <li><a href="#">chocolate, gomas e rebuçados</a></li>
                        <li><a href="#">arroz, massa e farinha</a></li>
                        <li><a href="#">molhos, temperos e sal</a></li>
                        <li><a href="#">alimentação infantil</a></li>
                      </ul>
                    </li>

                    <li class="has-child">
                      <a href="#">
                        <!-- <div class="icon-large"><i class="ri-bluetooth-line"></i></div> -->
                        laticíos & ovos
                        <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                      </a>
                      <ul>
                        <li><a href="#">ovos</a></li>
                        <li><a href="#">leite</a></li>
                        <li><a href="#">iogurtes</a></li>
                        <li><a href="#">manteigas e cremes para barrar</a></li>
                        <li><a href="#">queijos</a></li>
                      </ul>
                    </li>



                    <li class="has-child">
                      <a href="#">
                        <!-- <div class="icon-large"><i class="ri-t-shirt-line"></i></div> -->
                        congelados
                        <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                      </a>
                      <ul>
                        <li><a href="#">nuggets</a></li>
                        <li><a href="#">hambúrgueres e pizzas</a></li>
                        <li><a href="#">peixe, marisco e carne</a></li>
                        <li><a href="#">batata frita</a></li>
                        <li><a href="#">gelados</a></li>
                        <li><a href="#">sobremesas</a></li>
                        <li><a href="#">coisas</a></li>
                      </ul>
                    </li>


                    <li class="has-child">
                      <a href="#">
                        <!-- <div class="icon-large"><i class="ri-heart-2-line"></i></div> -->
                        livros
                        <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                      </a>
                    </li>

                    
                    <li class="has-child">
                      <a href="#">
                        <!-- <div class="icon-large"><i class="ri-heart-2-line"></i></div> -->
                        eletrodomésticos
                        <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                      </a>
                    </li>

                    
                    <li class="has-child">
                      <a href="#">
                        <!-- <div class="icon-large"><i class="ri-heart-2-line"></i></div> -->
                        bebidas
                        <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                      </a>
                    </li>


                    <li class="has-child">
                      <a href="#">
                        <!-- <div class="icon-large"><i class="ri-user-3-line"></i></div> -->
                        beleza & higiene
                        <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                      </a>
                    </li>


                    <!-- <li class="has-child">
                      <a href="#">
                        <div class="icon-large"><i class="ri-home-8-line"></i></div>
                        casa, mobiliário & decoração
                        <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                      </a>
                      <div class="mega">

                        <div class="flexcol">
                          <div class="row">
                            <h4><a href="#">cozinha</a></h4>
                            <ul>
                              <li><a href="#">louça de fogão</a></li>
                              <li><a href="#">cafeteiras e chaleiras</a></li>
                              <li><a href="#">baldes e saco do lixo</a></li>
                              <li><a href="#">facas e utensíios</a></li>
                              <li><a href="#">panos, aventais e pegas</a></li>
                            </ul>
                          </div>

                          <div class="row">
                            <h4><a href="#">festa</a></h4>
                            <ul>
                              <li><a href="#">descartáveis para festa</a></li>
                              <li><a href="#">velas de aniversários</a></li>
                              <li><a href="#">decoração de festa</a></li>
                            </ul>
                          </div>
                        </div>


                        <div class="flexcol">
                          <div class="row">
                            <h4><a href="#">mobiliário</a></h4>
                            <ul>
                              <li><a href="#">sofás e poltronas</a></li>
                              <li><a href="#">cadeiras e bancos</a></li>
                              <li><a href="#">mesas e secretárias</a></li>
                              <li><a href="#">quarto</a></li>
                              <li><a href="#">moniliário de jardim</a></li>
                            </ul>
                          </div>
                          <div class="row">
                            <h4><a href="#">lavandarias & arrumação</a></h4>
                            <ul>
                              <li><a href="#">Tábuas e ferros de engomar</a></li>
                              <li><a href="#">estendais e molas</a></li>
                              <li><a href="#">bacias e cestos de roupa</a></li>
                              <li><a href="#">vassouras, esfregonsa e panos</a></li>
                              <li><a href="#">costura</a></li>
                            </ul>
                          </div>




                        </div>
                      </div>
                    </li> -->

                    <li class="has-child">
                      <a href="#">
                        <!-- <div class="icon-large"><i class="ri-android-line"></i></div> -->
                        Frutas & Legumes
                        <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                      </a>
                    </li>

                    <li class="has-child">
                      <a href="#">
                        <!-- <div class="icon-large"><i class="ri-basketball-line"></i></div> -->
                        Brinquedos & Jogos
                        <div class="icon-small"><i class="ri-arrow-right-s-line"></i></div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="right">
              <div class="search-box">
                <form action="" class="search">
                  <span class="icon-large"><i class="ri-search-line"></i></span>
                  <input type="search" placeholder="o que procura?">
                  <button type="submit">procurar</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- header main -->

</header>