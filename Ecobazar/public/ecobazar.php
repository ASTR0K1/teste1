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

  <div id="page" class="site page-home">

   <aside class="site-off desktop-hide">
    <div class="off-canvas ">
      <div class="canvas-head flexitem">

        <div class="logo">
          <a href="#"><i class="fa-solid fa-seedling"></i><span>EcoBazar</span></a>
        </div>
        <a href="#" class="t-close flexcenter"><i class="ri-close-line"></i></a>

      </div>
      <div class="produtos"></div>
      <nav></nav>
      <div class="thetop-nav"></div>
    </div>
   </aside>

    <!-- header link -->
    <?php require_once 'parts/header.php' ?>
    <!-- end header link -->

    <main>

      <div class="slider">
        <div class="container">
          <div class="wrapper">
            <div class="swiper">
              <div class="swiper">

                <div class="slide">
                  <div class="item">
                    <div class="image object-cover">
                      <img src="assets/slider/slide-frutas.jpg" alt="">
                    </div>

                    <div class="text-content flexcol">
                      <h4>frutas & legumes</h4>
                      <h2><span>frustas frescas!</span><br><span></span></h2>
                      <a href="#" class="primary-button">comprar</a>
                    </div>
                  </div>
                </div>

                <!-- <div class="slide">
                  <div class="item">
                    <div class="image object-cover">
                      <img src="assets/slider/slider0.jpg" alt="">
                    </div>

                    <div class="text-content flexcol">
                      <h4>shoes fasfion</h4>
                      <h2><span>come and get it!</span><br><span>brand new shoes</span></h2>
                      <a href="#" class="primary-button">comprar</a>
                    </div>
                  </div>
                </div>

                <div class="slide">
                  <div class="item">
                    <div class="image object-cover">
                      <img src="assets/slider/slider1.jpg" alt="">
                    </div>

                    <div class="text-content flexcol">
                      <h4>shoes fasfion</h4>
                      <h2><span>come and get it!</span><br><span>brand new shoes</span></h2>
                      <a href="#" class="primary-button">comprar</a>
                    </div>
                  </div>
                </div>

                <div class="slide">
                  <div class="item">
                    <div class="image object-cover">
                      <img src="assets/slider/slide-frutas.jpg" alt="">
                    </div>

                    <div class="text-content flexcol">
                      <h4>frutas & legumes</h4>
                      <h2><span>frustas frescas!</span><br><span></span></h2>
                      <a href="#" class="primary-button">comprar</a>
                    </div>
                  </div>
                </div> -->

              </div>

              <div class="swiper-pagination"></div>

            </div>

          </div>
        </div>
      </div>
      <!-- sliders -->

      <div class="trending">
        <div class="container">
          <div class="wrapper">
            <div class="sectop flexitem">
              <h2><span class="circle"></span><span>em destaque</span></h2>
            </div>
            <div class="column">
              <div class="flexwrap">
                <div class="row products big">
                 <div class="item"> 
                    <div class="offer">
                      <p>oferta acaba em</p>
                      <ul class="flexcenter">
                        <li>1</li>:
                        <li>15</li>:
                        <li>25</li>:
                        <li>60</li>
                      </ul>
                    </div>

                    <div class="media">

                      <div class="image">
                        <a href="#">
                          <img src="assets/lay's.webp" alt="">
                        </a>
                      </div>

                      <div class="hoverable">
                        <ul>
                          <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                          <li><a href="#"><i class="ri-eye-line"></i></a></li>
                          <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                        </ul>
                      </div>

                      <!-- <div class="discount circle flexcenter"><span>31%</span></div> -->

                    </div>
                    <!-- PRODUTO EM DISTAQkcUE -->
                    <div class="content">
                      
                      <h3 class="main-links"><a href="#">Batata Frita Lisa com Sal</a></h3>
                      <div class="price">
                        <span class="current">4.999,00kz</span>
                        <span class="normal mini-text">6.898,00kz</span>
                      </div>

                      <div class="stock mini-text">

                        <div class="qty">
                            <span>stock: <strong class="qty-available">107</strong></span>
                            <span>vendidos: <strong class="qty-vendidos">3929</strong></span>
                        </div>

                        <div class="bar">
                            <div class="available"></div>
                        </div>

                      </div>

                    </div>
                  </div>
                </div>

                <div class="row products mini">

                  <!-- PRODUTO -->

                  <div class="item">

                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/suminho.jpg" alt="">
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                          <li><a href="#"><i class="ri-eye-line"></i></a></li>
                          <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                        </ul>
                      </div>
                      <!-- <div class="discount circle flexcenter"><span>32%</span></div> -->
                    </div>
  
                    <div class="content">
                      <h3 class="main-links"><a href="page-produto.php">sumo de laranja</a></h3>
  
                      <div class="rating">
                        <span class="mini-text">compal</span>
                      </div>
  
                      <div class="price">
                        <span class="current">1.944,00kz</span>
                        <span class="normal mini-text">3.944,00kz</span>
                      </div>
                      <div class="mini-text">
                        <p>2934 vendidos</p>
                        
                      </div>
                    </div>
                
                  </div>
                  
                  <!-- PRODUTO -->

                  <div class="item">

                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/estrelitas.jpeg" alt="">
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                          <li><a href="#"><i class="ri-eye-line"></i></a></li>
                          <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                        </ul>
                      </div>
                      <!-- <div class="discount circle flexcenter"><span>32%</span></div> -->
                    </div>
  
                    <div class="content">
                      <h3 class="main-links"><a href="#">Cereais Chocapic</a></h3>
  
                      <div class="rating">
                        <span class="mini-text">Nestlé</span>
                      </div>
  
                      <div class="price">
                        <span class="current">2.000,00kz</span>
                        <span class="normal mini-text">4.000,00</span>
                      </div>
                      <div class="mini-text">
                        <p>2934 vendidos</p>
                        <!-- <p class="stock-danger">stock: 7 left!</p> -->
                      </div>
                    </div>
                
                  </div>

                  <!-- PRODUTO -->

                  <div class="item">

                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/lay's.webp" alt="">
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                          <li><a href="#"><i class="ri-eye-line"></i></a></li>
                          <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                        </ul>
                      </div>
                      <!-- <div class="discount circle flexcenter"><span>32%</span></div> -->
                    </div>
  
                    <div class="content">
                      <h3 class="main-links"><a href="#">Maça Verde</a></h3>
  
                      <div class="rating">
                        <span class="mini-text">EcoBazar</span>
                      </div>
  
                      <div class="price">
                        <span class="current">550,98kz</span>
                        <!-- <span class="normal mini-text">28.000,00kz</span> -->
                      </div>
                      <div class="mini-text">
                        <p>25 vendidos</p>
                        
                      </div>
                    </div>
                
                  </div>

                  <!-- PRODUTO -->

                  <div class="item">

                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/estrelitas1.jpeg" alt="">
                        </a>
                      </div>
                      <div class="hoverable">
                        <ul>
                          <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                          <li><a href="#"><i class="ri-eye-line"></i></a></li>
                          <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                        </ul>
                      </div>
                      <!-- <div class="discount circle flexcenter"><span>32%</span></div> -->
                    </div>
  
                    <div class="content">
                      <h3 class="main-links"><a href="#">Cereais Estrelitas</a></h3>
  
                      <div class="rating">
                        <span class="mini-text">Nestlé</span>
                      </div>
  
                      <div class="price">
                        <span class="current">2.599,00kz</span>
                        <span class="normal mini-text">4.590,00kz</span>
                      </div>
                      <div class="mini-text">
                        <p>2934 vendidos</p>
                        
                      </div>
                    </div>
                
                  </div>

                </div>

                <div class="row products mini">

                  <!-- PRODUTO -->
                  <div class="item">

                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/estrelitas1.jpeg" alt="">
                        </a>
                      </div>

                      <div class="hoverable">
                        <ul>
                          <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                          <li><a href="#"><i class="ri-eye-line"></i></a></li>
                          <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                        </ul>
                      </div>
                      <!-- <div class="discount circle flexcenter"><span>32%</span></div> -->
                    </div>
  
                    <div class="content">

                      <h3 class="main-links"><a href="#">Nestum</a></h3>
  
                      <div class="rating">
                        <span class="mini-text">Nestlé</span>
                      </div>
  
                      <div class="price">
                        <span class="current">2.890,00kz</span>
                        <span class="normal mini-text">4.834,98kz</span>
                      </div>

                      <div class="mini-text">
                        <p>2934 vendidos</p>
                        
                      </div>

                    </div>
                
                  </div>
                  
                  <!-- PRODUTO -->
                  <div class="item">

                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/lay's.webp" alt="">
                        </a>
                      </div>

                      <div class="hoverable">
                        <ul>
                          <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                          <li><a href="#"><i class="ri-eye-line"></i></a></li>
                          <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                        </ul>
                      </div>
                      <!-- <div class="discount circle flexcenter"><span>32%</span></div> -->
                    </div>
  
                    <div class="content">

                      <h3 class="main-links"><a href="#">maçã vermelha</a></h3>
  
                      <div class="rating">
                        <span class="mini-text">EcoBazar</span>
                      </div>
  
                      <div class="price">
                        <span class="current">550,00kz</span>
                        <!-- <span class="normal mini-text">23.000,00kz</span> -->
                      </div>

                      <div class="mini-text">
                        <p>2934 vendidos</p>
                        
                      </div>

                    </div>
                
                  </div>
                  
                  <!-- PRODUTO -->
                  <div class="item">

                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/suminho.jpg" alt="">
                        </a>
                      </div>

                      <div class="hoverable">
                        <ul>
                          <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                          <li><a href="#"><i class="ri-eye-line"></i></a></li>
                          <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                        </ul>
                      </div>
                      <!-- <div class="discount circle flexcenter"><span>32%</span></div> -->
                    </div>
  
                    <div class="content">

                      <h3 class="main-links"><a href="#">Cereais Corn flakes</a></h3>
  
                      <div class="rating">
                        <span class="mini-text">Kelluyy's</span>
                      </div>
  
                      <div class="price">
                        <span class="current">1.990,99kz</span>
                        <!-- <span class="normal mini-text">39.000,00kz</span> -->
                      </div>

                      <div class="mini-text">
                        <p>2344 vendidos</p>
                      </div>

                    </div>
                
                  </div>
                  
                  <!-- PRODUTO -->
                  <div class="item">

                    <div class="media">
                      <div class="thumbnail object-cover">
                        <a href="#">
                          <img src="assets/tablerone.jpg" alt="">
                        </a>
                      </div>

                      <div class="hoverable">
                        <ul>
                          <li class="active"><a href="#"><i class="ri-heart-line"></i></a></li>
                          <li><a href="#"><i class="ri-eye-line"></i></a></li>
                          <li><a href="#"><i class="ri-shuffle-line"></i></a></li>
                        </ul>
                      </div>
                      <!-- <div class="discount circle flexcenter"><span>32%</span></div> -->
                    </div>
  
                    <div class="content">

                      <h3 class="main-links"><a href="#">chocolate Tablerone</a></h3>
  
                      <div class="rating">
                        <span class="mini-text">Tablerone</span>
                      </div>
  
                      <div class="price">
                        <span class="current">4.757,98kz</span>
                        <span class="normal mini-text"></span>
                      </div>

                      <div class="mini-text">
                        <p>2934 vendidos</p>
                        
                      </div>

                    </div>
                
                  </div>
                  
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
     <!-- NAS TRENDESS -->


      <!-- <div class="features"> to do
        <div class="container">
          <div class="wrapper">
            <div class="column">

              <div class="sectop flexitem">
                <h2><span class="circle"></span><span>vantagens de comprar na EcoBazar online</span></h2>
              </div>

              <section id="feature" class="feature">
    
            
                
                  
              </section>

            </div>
          </div>
        </div>
      </div> -->

    </main>
    

    <?php require_once 'parts/footer.php' ?>
  
    <div class="search-bottom desktop-hide">
      <div class="container">
        <div class="wrapper">
          
          <form action="" class="search">
            <a href="#" class="t-close search-close flexcenter"><i class="ri-close-line"></i></a>
            <span class="icon-large"><i class="ri-search-line"></i></span>
            <input type="search" placeholder="" required>
            <button type="submit">search</button>
          </form>

        </div>
      </div>
    </div>
    <!-- menu-bottom search phone -->

    <div class="overlay"></div>

  </div>
   
  <!-- link do js-->
  <script src="js/script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>



</body>
</html>