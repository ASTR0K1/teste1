<?php

require_once '../app/views/signup_view.inc.php'; 
require_once '../app/views/login_view.inc.php'; 
require_once '../config/config_session.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EcoBazar</title>

  <!-- link do css -->
  <link rel="stylesheet" href="css/style0.css">
  <link rel="stylesheet" href="css/style.css">


  <!-- link das fonts -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>



    <div class="header-nav">
        <div class="container">
          <div class="wrapper flexitem">
            <a href="#" class="trigger desktop-hide"><span class="i ri-menu-2-line"></span></a>
            <div class="left flexitem">
              <div class="logo">
                <a href="ecobazar.php"><span><i class="fa-solid fa-seedling"></i></span>EcoBazar</a>
              </div>
            </div>
          </div>
        </div>
    </div>


    <div class="body">
        
        <div class="container0" id="container0">

            <!-- sign-up -->
            <div class="form-container0 sign-up-container0">
                <form class="form" action="../app/include/signup.inc.php" method="post">   
                    <h1>CRIAR UMA CONTA</h1>
                
                    <?php
                        signup_inputs();
                    ?>

                    <button>REGISTRAR</button>

                </form>
            </div>
            <!-- login -->
            <div class="form-container0 sign-in-container0">
                <form class="form" action="../app/include/login.inc.php" method="post">
                    <h1>JÁ ESTÁS REGISTRADO?</h1>
                    <div class="infield">
                        <input type="email" placeholder="Email" name="email" id="input"/>
                        <label></label>
                    </div>
                    <div class="infield">
                        <input type="password" name="senha" id="password" placeholder="Senha" />
                        <label></label>    
                    </div>
                    <a href="#" class="forgot a">Esqueceste-te da palavra-passe?</a>
                    <button>Entrar</button>
                </form>
            </div>
            <!-- control dos swipes -->
            <div class="overlay0-container0" id="overlayCon">
                <div class="overlay0">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome!</h1>
                        <p>Se já tens conta, inicia sessão e desfruta das promoções</p>
                        <button>ENTRAR</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Olá, Amigo!</h1>
                        <p>Crie uma conta para teres uma experiência personalizada!</p>
                        <button>CRIAR UMA CONTA</button>
                    </div>
                </div>
                <button id="overlayBtn"></button>
            </div>
            
        </div>

       
        <center>
            <?php
                check_signup_errors();
                check_login_errors();
            ?>
        </center>

        <div id="page" class="site page-home">
            <footer>
                <div class="footer-info">
                    <div class="container">
                        <p class="mini-text">copyright© 2024 Modelo EcoBazar, Todos os direitos reservados.</p>
                    </div>
                </div>           
            </footer>
        </div>   
    
    </div>            
            
        

        

    <script >
        //LOGIN PAGE SWITCH
        const container0 = document.getElementById('container0');
        const overlayCon = document.getElementById('overlayCon');
        const overlayBtn = document.getElementById('overlayBtn');

        overlayBtn.addEventListener('click', ()=>{
            container0.classList.toggle('right-panel-active');
            
            overlayBtn.classList.remove('btnScaled');
            window.requestAnimationFrame(()=>{
                overlayBtn.class.add('btnScaled');
            })
        });

        window.onload = function(){
            document.getElementById("input").focus();
        }
    </script>

   

    

    


<!-- 
    se estou logged in na page isso n vai aparecer 
    <?php 
    if(!isset($_SESSION["nome_usuario"])){?>

    Tudo q estiver dentro deste if n vai aparecer se o usuario estiver logged in no site
    tirar o '!' para acontecer o inverso

    <?php } ?>
 -->
</body>
</html>