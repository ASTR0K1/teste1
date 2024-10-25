<?php

require_once '../config/config_session.php';
require_once '../config/database.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoBazar</title>

  <!-- link do css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="style0.css"> -->

  <!-- link das fonts -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css">
  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    



</head>
<body>

  <div id="page" class="site page-single">

   <aside class="site-off desktop-hide">
    <div class="off-canvas ">
      <div class="canvas-head flexitem">

        <div class="logo">
          <a href="ecobazar.php"><i class="fa-solid fa-seedling"></i><span>EcoBazar</span></a>
        </div>
        <a href="ecobazar.php" class="t-close flexcenter"><i class="ri-close-line"></i></a>

      </div>
      <div class="produtos"></div>
      <nav></nav>
      <div class="thetop-nav"></div>
    </div>
   </aside>

   <?php require_once 'parts/header.php'; ?>

    <main>

      <div class="single-product">
        <div class="container">
          <div class="wrapper">

            <!-- <div class="breadcrumb">
              <ul class="flexitem">
                <li><a href="#">home</a></li>
                <li><a href="#">shoes</a></li>
                <li><a href="#">sumo compal</a></li>
              </ul>
            </div> -->
            <!-- breadcrumb -->

            <div class="column">
              <div class="products one">
                <div class="flexwrap">
                  <div class="row">
                    <div class="item is_stiky">
                      <div class="price">
                        <span class="discount">32% <br>OFF</span>
                      </div>
                      <div class="big-image">
                        <div class="big-image-wrapper">
                          <div class="image-show">
                            <a href="#"><img src="assets/suminho.jpg" alt=""></a>
                          </div>
                        </div>
                      </div>

                      <!-- <div class="small-image">
                        <ul class="small-image-wrapper">
                          <li class="thumbnail-show">
                            <img src="assets/suminho.jpg" alt="">
                          </li>
                        </ul>
                      </div> -->
                    </div>
                  </div>
                  <div class="row">
                    <div class="item">
                      <h1>sumo compal classico nectar laranja</h1>
                      <div class="content">
                        <div class="stock">
                          <span class="available">em stock</span>
                        </div>
                        <div class="price">
                          <span class="current">1,944,00Kz</span>
                          <span class="normal">3,944,00Kz</span>
                        </div>
                        <div class="actions">
                          <div class="qty-control flexitem">
                            <button class="minus circle">-</button>
                            <input type="text" value="1">
                            <button class="plus circle">+</button>
                          </div>
                          <div class="button-cart"><button class="primary-button">carrinho</button></div>
                          <div class="wish-share">
                            <ul class="flexitem second-links">

                              <li><a href="#">
                                <span class="icon-large"><i class="ri-heart-line"></i></span>
                                <span>wishlist</span>
                              </a></li>
                              
                              <!-- <li><a href="#">
                                <span class="icon-large"><i class="ri-share-line"></i></span>
                                <span>partilhar</span>
                              </a></li> -->

                            </ul>
                          </div>
                        </div>
                        <div class="description collapse">
                          <ul>
                            <li class="has-child">
                              <a href="#0" class="icon-small">descrição</a>
                              <ul class="content">
                                <li><span>marca</span>compal</li>
                                <li><span>por ai </span>ssabe</li>
                                <li><span>por ai </span>ssabe</li>
                                <li><span>por ai</span>ssabe</li>
                              </ul>
                            </li>
                            <li class="has-child expand">
                              <a href="#0" class="icon-small">detalhes</a>
                              <div class="content">
                                <p>Sumo de laranja: à base de concentrado, água, açúcar, polpa de laranja (0,7%), regulador de acidez: ácido cítrico e ácido ascórbico (vitamina C).</p>
                              </div>
                            </li>
                          </ul>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>

    <?php require_once 'parts/footer.php';?>
  
    <div class="search-bottom desktop-hide">
      <div class="container">
        <div class="wrapper">
          
          <form action="" class="search">
            <a href="#" class="t-close search-close flexcenter"><i class="ri-close-line"></i></a>
            <span class="icon-large"><i class="ri-search-line"></i></span>
            <input type="search" placeholder="insira o seu email" required>
            <button type="submit">search</button>
          </form>

        </div>
      </div>
    </div>
    <!-- menu-bottom search phone -->

    <div class="overlay"></div>

  </div>



   

  <script src="/js/script.js"></script>

</body>
</html>