

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

  <div id="page" class="site page-category">

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

   <?php require_once 'parts/header.php' ?>


    <main>

    <div class="single-category">
        <div class="container">
          <div class="wrapper">
            <div class="column">
              <div class="holder">
                <div class="row sidebar">
                  <div class="filter">

                    
                    <div class="filter-block">
                      <h4>categorias</h4>
                      <ul>
                        <li><input type="checkbox" name="checkbox" id="bags">
                        <label for="bags">
                          <span class="checked"></span>
                            <span>bags</span>
                            </label>
                        <span class="count">15</span>
                        </li>
                        
                        <li><input type="checkbox" name="checkbox" id="belezas">
                        <label for="belezas">
                          <span class="checked"></span>
                            <span>belezas</span>
                            </label>
                        <span class="count">15</span>
                        </li>

                        <li><input type="checkbox" name="checkbox" id="roupas">
                        <label for="roupas">
                          <span class="checked"></span>
                            <span>roupas</span>
                            </label>
                        <span class="count">15</span>
                        </li>

                        <li><input type="checkbox" name="checkbox" id="comands">
                        <label for="comands">
                          <span class="checked"></span>
                            <span>comands</span>
                            </label>
                        <span class="count">15</span>
                        </li>

                        <li><input type="checkbox" name="checkbox" id="coisas">
                        <label for="coisas">
                          <span class="checked"></span>
                            <span>coisas</span>
                            </label>
                        <span class="count">15</span>
                        </li>
                      </ul>
                    </div>
                    <!-- filtro -->

                    <div class="filter-block">
                      <h4>Atividades</h4>
                      <ul>
                        <li><input type="checkbox" name="checkbox" id="isso1">
                        <label for="isso1">
                          <span class="checked"></span>
                            <span>isso1</span>
                            </label>
                        <span class="count">15</span>
                        </li>
                        
                        <li><input type="checkbox" name="checkbox" id="isso2">
                        <label for="isso2">
                          <span class="checked"></span>
                            <span>isso2</span>
                            </label>
                        <span class="count">15</span>
                        </li>

                        <li><input type="checkbox" name="checkbox" id="isso3">
                        <label for="isso3">
                          <span class="checked"></span>
                            <span>isso3</span>                            
                            </label>
                        <span class="count">15</span>
                        </li>

                        <li><input type="checkbox" name="checkbox" id="isso4">
                        <label for="isso4">
                          <span class="checked"></span>
                            <span>isso4</span>                            
                            </label>
                        <span class="count">15</span>
                        </li>

                        <li><input type="checkbox" name="checkbox" id="isso5">
                        <label for="isso5">
                          <span class="checked"></span>
                            <span>isso5</span>
                            </label>
                        <span class="count">15</span>
                        </li>
                      </ul>
                    </div>
                    <!-- filtro -->

                    <div class="filter-block">
                      <h4>coisas</h4>
                      <ul>
                        <li><input type="checkbox" name="checkbox" id="coisas1">
                        <label for="coisas1">
                          <span class="checked"></span>
                            <span>coisas0</span>                           
                          </label>
                        <span class="count">15</span>
                        </li>
                        
                        <li><input type="checkbox" name="checkbox" id="coisa2">
                        <label for="coisa2">
                          <span class="checked"></span>
                            <span>coisa2</span>
                          
                        </label><span class="count">15</span>
                        </li>

                        <li><input type="checkbox" name="checkbox" id="coisa3">
                        <label for="coisa3">
                          <span class="checked"></span>
                            <span>coisa3</span>
                          
                        </label> <span class="count">15</span>
                        </li>

                        <li><input type="checkbox" name="checkbox" id="coisa4">
                        <label for="coisa4">
                          <span class="checked"></span>
                            <span>coisa4</span>
                            </label>
                        <span class="count">15</span>
                        </li>

                        <li><input type="checkbox" name="checkbox" id="coisa5">
                        <label for="coisa5">
                          <span class="checked"></span>
                            <span>coisa5</span>
                            </label>
                        <span class="count">15</span>
                        </li>
                      </ul> 
                    </div>
                    <!-- filtro -->

                    <div class="filter-block pricing">
                      <h4>preço</h4>
                      <div class="byprice">
                          <div class="range-track">
                            <input type="range" value="2500" min="0" max="10000">
                          </div>
                        
                        <div class="price-range">
                          <span class="price-form">50kz</span>
                          <span class="price-to">500kz</span>
                        </div>
                      </div>
                    </div>
                    <!-- mambo do preço -->


                  </div>
                </div>

                <div class="section">
                  <div class="row">
                    <div class="cat-head">

                      <div class="breadcrumb">
                        <ul class="flexitem">
                          <li><a href="#">home</a></li>
                          <li>astroo</li>
                        </ul>
                      </div>

                      <div class="page-title">
                        <h1>Astroo</h1>
                      </div>

                      <div class="cat-description">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus, esse iure omnis maxime harum eius hic, molestiae reiciendis enim accusantium consequatur vitae necessitatibus? Maiores quibusdam temporibus, quia dolores incidunt Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti vero itaque ducimus id accusamus culpa iste, maxime, inventore, odio nam ipsum esse repellendus magnam quaerat reiciendis illo totam dolorem cum?</p>
                      </div>

                      <div class="cat-navigation flexitem">
                        <div class="item-filter desktop-hide">
                          <a href="#" class="filter-trigger label">
                            <i class="ri-menu-2-line ri-2x"></i>
                            <span>filter</span>
                          </a>
                        </div>
                        <div class="item-sortir">
                          <div class="label">
                            <span class="mobile-hide">sort by default</span>
                            <div class="desktop-hide">default</div>
                            <i class="ri-arrow-down-s-line"></i>
                          </div>
                          <ul>
                            <li>default</li>
                            <li>product name</li>
                            <li>price</li>
                            <li>brand</li>
                          </ul>
                        </div>
                        <div class="item-perpage mobile-hide">
                          <div class="label">items 10 per page</div>
                          <div class="desktop-hide">10</div>
                          <i class="ri-arrow-down-s-line"></i>
                        </div>
                      </div>

                    </div>
                  </div>

                  <!-- produtos -->
                  <div class="products main flexwrap">

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
                  <!-- produtos fim -->

                  <div class="load-more flexcenter">
                    <a href="#" class="secondary-button">load more</a>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>
    

    <footer>

      <div class="newsletter">
        <div class="container">
          <div class="wrapper">
            <div class="box">
              <div class="content">
                <h3>EcoBazar</h3>
                <p>receba e-mail sobre novos podutos e <strong>ofertas especiais</strong></p>
              </div>
              <form action="" class="search">
                <span class="icon-large"><i class="ri-mail-line"></i></span>
                <input type="mail" placeholder="insira o seu email" required>
                <button type="submit">Subscrever</button>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- search footer -->

      <div class="widgets">
        <div class="container">
          <div class="wrapper">
            <div class="flexwrap">
              <div class="row">
                <div class="item mini-links">
                  <h4>ajuda & contactos</h4>
                  <ul class="flexcol">
                    <li><a href="#">minha conta</a></li>
                    <li><a href="#">devoluções</a></li>
                    <li><a href="#">assistência</a></li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="item mini-links">
                  <h4>categoria dos produtos</h4>
                  <ul class="flexcol">
                    <li><a href="#">merciarias</a></li>
                    <li><a href="#">laticíos e ovos</a></li>
                    <li><a href="#">peixaria e talho</a></li>
                    <li><a href="#">frutas e legumes</a></li>
                    <li><a href="#">charcutaria e queijos</a></li>
                    <li><a href="#">padaria e pastelaria</a></li>
                    <li><a href="#">congelados</a></li>
                    <li><a href="#">bebidas</a></li>
                    <li><a href="#">beleza e higiene</a></li>
                  </ul>
                </div>
              </div>
              <div class="row">
                <div class="item mini-links">
                  <h4>sobre a EcoBazar</h4>
                  <ul class="flexcol">
                    <li><a href="#">informações sobre nós</a></li>
                    <li><a href="#">nossos investidores</a></li>
                    <li><a href="#">nossas políticas</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- widgets footer -->
      
      <div class="footer-info">
        <div class="container">
          <div class="wrapper">
            <div class="flexcol">

              <div class="logo">
                <a href="#"><span><i class="fa-solid fa-seedling"></i></span>EcoBazar</a>
              </div> 

              <div class="social">
                <ul class="flexitem">
                  <li class="t"><a href="#"><i class="ri-twitter-line"></i></a></li>
                  <li><a href="#"><i class="ri-facebook-line"></i></a></li>
                  <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                  <li><a href="#"><i class="ri-linkedin-line"></i></a></li>
                  <li><a href="#"><i class="ri-youtube-line"></i></a></li>
                </ul>
              </div>

            </div>
            <p class="mini-text">copyright© 2024 Modelo EcoBazar, Todos os direitos reservados.</p>
          </div>
        </div>
      </div>
      <!-- footer logo -->

      <div class="menu-bottom desktop-hide">
        <div class="container">
          <div class="wrapper">
            <nav>
              <ul class="flexitem">
                <li>
                  <a href="#">
                    <i class="ri-bar-chart-line"></i>
                    <span>popular</span>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class="ri-user-3-line"></i>
                    <span>conta</span>
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class="ri-heart-line"></i>
                    <span>wishlist</span>
                  </a>
                </li>

                <li>
                  <a href="#0" class="t-search">
                    <i class="ri-search-line"></i>
                    <span>search</span>
                  </a>
                </li>

                <li>
                  <a href="#0" class="cart-trigger">
                    <i class="ri-shopping-cart-line"></i>
                    <span>carrinho</span>
                    <div class="fly-item">
                      <span class="item-number">0</span>
                    </div>
                  </a>
                </li>

              </ul>
            </nav>
          </div>
        </div>
      </div>
      <!-- menu-bottom phone -->

    </footer>
  
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



   

  <script src="js/script.js"></script>
  <script>
    const Ftoshow = '.filter';
    const Ftopup = document.querySelector(Ftoshow);
    const Ftrigger1 = document.querySelector('.filter-trigger');

    Ftrigger1.addEventListener('click', () =>{
      setTimeout(() => {
        if(!Ftopup.classList.contains('show')) {
          Ftopup.classList.add('show')
        }
      }, 250 )
    })

    //close filter auto
    document.addEventListener('click', (e) => {
      const isClosest = e.target.closest(Ftoshow);
      if(!isClosest && Ftopup.classList.contains('show')){
        Ftopup.classList.remove('show')
      }
    })
  </script>

</body>
</html>