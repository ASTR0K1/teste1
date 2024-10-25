<?php

require_once '../config/config_session.php';
require_once '../config/database.php';

if (!isset($_SESSION['id_Clientes'])) {
  header('Location: ecobazar.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoBazar</title>

  <!-- link do css -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/style-profile.css">

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

      

      <div class="contentor">
        <div class="perfil">
          <div class="perfil-cabeca">
              <div class="perfil-texto-contentor">
                  <h1 class="profile-titulo"> <?=($_SESSION["nome_Clientes"])?> <?=($_SESSION["apelido_Clientes"])?> </h1>
                  <p class="perfil-email"><?=($_SESSION["email_Clientes"])?></p>
              </div>
          </div>

          <div class="tab">
              <a href="#" class="menu-link tablinks" onclick="openCity(event, 'conta')" id="defaultOpen"><i class="fa-solid fa-circle-user menu-icon"></i>Conta</a>
              <a href="#" class="menu-link tablinks" onclick="openCity(event, 'senha')" ><i class="fa-solid fa-key menu-icon"></i>Alteral senha</a>
              <a href="#" class="menu-link tablinks" onclick="openCity(event, 'encomendas')" ><i class="fa-solid fa-truck menu-icon"></i>Minhas encomendas</a>
              <a href="#" class="menu-link tablinks" onclick="openCity(event, 'endereco')" ><i class="fa-solid fa-location-dot menu-icon"></i>Meu endereço</a>
              <a href="../app/include/logout.inc.php" class="menu-link tablinks logout" onclick="openCity(event, 'sair')" ><i class="fa-solid fa-right-from-bracket menu-icon"></i>Sair</a>
          </div>
      </div> 

      <form class="tabcontent" id="conta" >
        <div class="conta-cabeca">
            <h1 class="conta-titulo">Configuração da conta</h1>
            <div class="bto-contentor">
                
                <button class="bto-salvar">Salvar</button>
            </div>
        </div>

        <div class="editar-conta">
            <div class="contentor-entrada">
                <label>Primeiro Nome</label>
                <input type="text" placeholder="<?=$_SESSION["nome_Clientes"]?>" />
            </div>
            <div class="contentor-entrada">
                <label>Último Nome</label>
                <input type="text" placeholder="<?=$_SESSION["apelido_Clientes"]?>" />
            </div>
        </div>

        <div class="editar-conta">
            <div class="contentor-entrada">
                <label>Email</label>
                <input type="email" placeholder="<?=$_SESSION["email_Clientes"]?>" />
            </div>
            <div class="contentor-entrada">
                <label>Número de telefone</label>
                <input type="text" placeholder="<?=$_SESSION["tel_Clientes"]?>" />
            </div>
        </div>

        <div class="editar-conta">
            <div class="contentor-entrada">
                <label>Endereço</label>
                <textarea placeholder="Endereço"></textarea>
            </div>
        </div>
      </form>

      <form class="tabcontent" id="senha" >
        <div class="conta-cabeca">
            <h1 class="conta-titulo">Alteral senha</h1>
            <div class="bto-contentor">
                
                <button class="bto-salvar">Salvar</button>
            </div>
        </div>

        <div class="editar-conta">
            <div class="contentor-entrada">
                <label>actual senha</label>
                <input type="text" placeholder="" />
            </div>
        </div>

        <div class="editar-conta">
            <div class="contentor-entrada">
                <label>nova senha</label>
                <input type="password" placeholder="" />
            </div>
            <div class="contentor-entrada">
                <label>repetir nova senha</label>
                <input type="password" placeholder="" />
            </div>
        </div>
      </form>

      <form class="tabcontent" id="encomendas" >
        <div class="conta-cabeca">
            <h1 class="conta-titulo">Estado de encomendas</h1>
        </div>
        <!-- Conteudo das encomendas -->
      </form>

      <form class="tabcontent" id="endereco" >
        <div class="conta-cabeca">
            <h1 class="conta-titulo">Meu endereço</h1>
            <div class="bto-contentor">
                <button class="bto-salvar">Salvar</button>
            </div>
        </div>

        <div class="editar-conta">
            <div class="contentor-entrada">
                <label>Endereço</label>
                <input type="text" placeholder="" />
            </div>
            <div class="contentor-entrada">
                <label>Empresa</label>
                <input type="text" placeholder="" />
            </div>
        </div>

        <div class="editar-conta">
            <div class="contentor-entrada">
                <label>País</label>
                <select name="" id="">
                  <option selected value="">Angola</option>
                </select>
            </div>
            <div class="contentor-entrada">
                <label>cidade</label>
                <input type="text" placeholder="" />
            </div>
        </div>

        <div class="editar-conta">
            <div class="contentor-entrada">
                <label>Ponto de referência</label>
                <textarea placeholder="Endereço"></textarea>
            </div>
        </div>
      </form>
     
      

        
    </div>

    </main>
    

    <footer>

      <!-- <div class="newsletter">
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
      </div> -->
      <!-- search footer -->

      <!-- <div class="widgets">
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
      </div> -->
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

    // const Ftoshow = '.filter';
    // const Ftopup = document.querySelector(Ftoshow);
    // const Ftrigger1 = document.querySelector('.filter-trigger');

    // Ftrigger1.addEventListener('click', () =>{
    //   setTimeout(() => {
    //     if(!Ftopup.classList.contains('show')) {
    //       Ftopup.classList.add('show')
    //     }
    //   }, 250 )
    // })

    // //close filter auto
    // document.addEventListener('click', (e) => {
    //   const isClosest = e.target.closest(Ftoshow);
    //   if(!isClosest && Ftopup.classList.contains('show')){
    //     Ftopup.classList.remove('show')
    //   }
    // });

    document.getElementById("defaultOpen").click();

    function openCity(evt, cityName) 
    {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(cityName).style.display = "block";
      evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
  </script>

</body>
</html>









<!-- <div class="single-checkout">
  <div class="container">
    <div class="wrapper">
      <div class="checkout flexwrap">
        <div class="item left styled">
          <h1>endereço de entrega</h1>
          <form action="">
            <p>
              f
            </p>
            <p>
              <label for="fname">primeiro nome<span></span></label>
              <input type="text" name="email" id="fname"  required >
            </p>
            <p>
              <label for="lname">ultimo nome<span></span></label>
              <input type="text"  id="lname"  required >
            </p>
            <p>
              <label for="empresa">empresa<span></span></label>
              <input type="text"  id="empresa" >
            </p>
            <p>
              <label for="cidade">cidade<span></span></label>
              <input type="text"  id="cidade"  required >
            </p>
            <p>
              <label for="endereço">endereço<span></span></label>
              <input type="text"  id="endereço"  required >
            </p>                  
            <p>
              <label for="telefone">telefone<span></span></label>
              <input type="text"  id="telefone"  >
            </p>                  
          </form>

          <div class="shipping-methods">
            <h2>shipping methods</h2>
            <p>
              <input type="radio" checked>
              <label></label>
            </p>
          </div>

          <div class="primary-checkout">
            <button class="primary-button">place ordeer</button>
          </div>

        </div>

        <div class="item right">
          <h2>order summary</h2>
          <div class="summary-order is_sticky">
            <div class="summary-totals">
              <ul>
                <li>
                  <span>subtotal</span>
                  <span>7000kz</span>
                </li>
                <li>
                  <span>discount</span>
                  <span>-00kz</span>
                </li>
                <li>
                  <span>shipping</span>
                  <span>+00kz</span>
                </li>
                <li>
                  <span>total</span>
                  <strong>7000kz</strong>
                </li>
              </ul>
            </div>
            <ul class="products mini">
              <li class="item">
                <div class="thumbnail object-cover">
                  <img src="assets/suminho.jpg" alt="">
                </div>
                <div class="item-container">
                  <p>coisas coisa coisas maius coisas</p>
                  <span class="price">
                    <span>2000kz</span>
                    <span>x 2</span>
                  </span>
                </div>
              </li>
              <li class="item">
                <div class="thumbnail object-cover">
                  <img src="assets/products/home4.jpg" alt="">
                </div>
                <div class="item-container">
                  <p>coisas coisa coisas maius coisas</p>
                  <span class="price">
                    <span>2000kz</span>
                    <span>x 2</span>
                  </span>
                </div>
              </li>
              <li class="item">
                <div class="thumbnail object-cover">
                  <img src="assets/products/home3.jpg" alt="">
                </div>
                <div class="item-container">
                  <p>coisas coisa coisas maius coisas</p>
                  <span class="price">
                    <span>2000kz</span>
                    <span>x 2</span>
                  </span>
                </div>
              </li>
              <li class="item">
                <div class="thumbnail object-cover">
                  <img src="assets/products/home1.jpg" alt="">
                </div>
                <div class="item-container">
                  <p>coisas coisa coisas maius coisas</p>
                  <span class="price">
                    <span>2000kz</span>
                    <span>x 2</span>
                  </span>
                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
</div> -->