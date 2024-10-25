

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoBazar</title>

  <!-- link do css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style0.css">

  <!-- link das fonts -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css">
  

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />





</head>
<body>

  <div id="page" class="site page-cart">

   <aside class="site-off desktop-hide">
    <div class="off-canvas ">
      <div class="canvas-head flexitem">

        <div class="logo">
          <a href="ecobazar.php"><i class="fa-solid fa-seedling"></i><span>Ecobazar</span></a>
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

      <div class="single cart">
        <div class="container">
          <div class="wrapper">
            <div class="breadcrumb">
              <ul class="flexitem">
                <li><a href="#">home</a></li>
                <li>carrinho</li>
              </ul>
            </div>
            <div class="page-title">
              <h1>carrinho de compras</h1>
            </div>
            <div class="products one cart">
              <div class="flexwrap">
                <from action="" class="form-cart">
                  <div class="item">
                    <table id="cart-table">
                      <thead>
                        <tr>
                          <th>produto</th>
                          <th>preço unitário</th>
                          <th>qtd</th>
                          <th>total</th>
                          <th></th>
                        </tr>
                      </thead>
                      
                      <tbody>
                        <tr>
                          <td class="flexitem">
                            <div class="thumbnail object-cover">
                              <a href="#"><img src="assets/suminho.jpg" alt=""></a>
                            </div>
                            <div class="content">
                              <strong><a href="#">sumo compal classico nectar laranja</a></strong>
                              <!--  <p>color: astroboy is him</p> -->
                            </div>
                          </td>
                          <td class="cart-price">1.999,00kz</td>
                          <td>
                            <div class="qty-control flexitem">
                              <button class="minus">-</button>
                              <input type="text" value="2" min="1">
                              <button class="plus">+</button>
                            </div>
                          </td>
                          <td  class="cart-price">3.998,00kz</td>
                          <td><a href="" class="item-remove"><i class="ri-close-line"></i></a></td>
                        </tr>
                        
                        <tr>
                          <td class="flexitem">
                            <div class="thumbnail object-cover">
                              <a href="#"><img src="assets/products/apparel1.jpg" alt=""></a>
                            </div>
                            <div class="content">
                              <strong><a href="#">casaco fasfion preto</a></strong>
                              <!-- <p>color: astroboy is him</p> -->
                            </div>
                          </td>
                          <td  class="cart-price">23.000,00kz</td>
                          <td>
                            <div class="qty-control flexitem">
                              <button class="minus">-</button>
                              <input type="text" value="1" min="1">
                              <button class="plus">+</button>
                            </div>
                          </td>
                          <td class="cart-price">23.000,00kz</td>
                          <td><a href="" class="item-remove"><i class="ri-close-line"></i></a></td>
                        </tr>
                        
                        <tr>
                          <td class="flexitem">
                            <div class="thumbnail object-cover">
                              <a href="#"><img src="assets/products/shoe2.jpg" alt=""></a>
                            </div>
                            <div class="content">
                              <strong><a href="#">retual 0,4</a></strong>
                              <!-- <p>color: astroboy is him</p> -->
                            </div>
                          </td>
                          <td  class="cart-price">24.000,00kz</td>
                          <td>
                            <div class="qty-control flexitem">
                              <button class="minus">-</button>
                              <input type="text" value="1" min="1">
                              <button class="plus">+</button>
                            </div>
                          </td>
                          <td class="cart-price">24.000,00kz</td>
                          <td><a href="" class="item-remove"><i class="ri-close-line"></i></a></td>
                        </tr>
                        
                        <tr>
                          <td class="flexitem">
                            <div class="thumbnail object-cover">
                              <a href="#"><img src="assets/suminho.jpg" alt=""></a>
                            </div>
                            <div class="content">
                              <strong><a href="#">sumo compal classico nectar laranja</a></strong>
                              <!-- <p>color: astroboy is him</p> -->
                            </div>
                          </td>
                          <td  class="cart-price">3.998,00kz</td>
                          <td>
                            <div class="qty-control flexitem">
                              <button class="minus">-</button>
                              <input type="text" value="2" min="1">
                              <button class="plus">+</button>
                            </div>
                          </td>
                          <td class="cart-price">4000kz</td>
                          <td><a href="" class="item-remove"><i class="ri-close-line"></i></a></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </from>

                <div class="cart-summary styled">
                  <div class="item">

                    <div class="coupon">
                      <input type="text" placeholder="codigo promocional">
                      <button>ok</button>
                    </div>

                    <div class="cart-total">
                      <table>
                        <tbody>
                          <tr>
                            <th>total produtos</th>
                            <th>50.998.00kz</th>
                          </tr>
                          <tr>
                            <th>desconto</th>
                            <th>-00kz</th>
                          </tr>
                          <tr>
                            <th>encomenda</th>
                            <th>1000.00kz</th>
                          </tr>
                          <tr class="grand-total">
                            <th>TOTAL</th>
                            <td><strong>51.998,00kz</strong></td>
                          </tr>
                        </tbody>
                      </table>
                      <a href="/test/page-checkout.html" class="secondary-button">continuar</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </main>
    
    <?php require_once 'parts/footer.php' ?>
  
  
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