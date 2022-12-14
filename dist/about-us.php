<?php
  session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="./assets/favicon/manifest.json">
    <link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="./assets/favicon/favicon.png">
    <meta name="msapplication-config" content="./assets/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    
    <!-- Libs CSS -->
    <link rel="stylesheet" href="./assets/css/libs.bundle.css" />
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets/css/theme.bundle.css" />
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    
    <!-- Map -->
    <link rel='stylesheet' href='https://api.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css' />
    
   
    <!-- Title -->
    <title>MilkShakespeare</title>
  </head>
  <body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-dark navbar-expand-lg navbar-togglable fixed-top">
      <div class="container">
    
        <!-- Navbar brand (mobile)
        <a class="navbar-brand d-lg-none" href="./index.html"></a> -->
    
        <!-- Navbar toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <!-- Navbar collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
    
          <!-- Navbar nav -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" href="./principal.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./about-us.php">Sobre nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./menu.php">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./reservation.php">Reservas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./contact-us.php">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./pesquisarLivros.php">Lista de Livros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./perfil.php">Perfil</a>
            </li>
          </ul>
    
          <!-- Navbar brand -->
          <a class="navbar-brand d-none d-lg-flex mx-lg-auto" href="./index.html">
          
          </a>
    
          <!-- Navbar nav -->
          <ul class="navbar-nav">
            
          </ul>
    
        </div>
      </div>
    </nav>
    
    <!-- HEADER -->
    <header data-jarallax data-speed=".8" style="background-image: url(assets/img/barista.jpg);">
      <div class="pt-10 pb-8 pt-md-15 pb-md-13 bg-black-50">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">

              <!-- Heading -->
              <h1 class="display-6 fw-bold text-white">
                Sobre Nós
              </h1>

            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Div 1 -->
    
    <section class="py-7 py-md-9">
      <div class="container">
        
        
          <!--<div class="row align-items-center justify-content-between">
          <div class="col-md-6 order-md-2">-->
            <center>
            <p class="lead text-black" text-align="justify">
              <h2> Quem Somos?</h2>
             </p>
           
          <p class="mb-6">
            Somos uma cafeteria que conta com um menu recheado de opções para o café da manhã e um lugar agradável para relaxar e aproveitar um bom café.
            Nossos produtos são personalizados com o nome dos autores, livros e personagens da nossa literatura e da literatura estrangeira que mais amamos! 
            Nos tornamos especialistas em proporcionar momentos únicos e criar boas memórias.
            Oferecemos aos nossos clientes o melhor dos aromas e sabores que uma xícara de café pode apresentar, além dos mais incríveis acompanhamentos para harmonizar e elevar essa experiência.

           </p> 
          </div>
        </center>
        

        <!--<div class="col-md-5 order-md-1">
            <p class="lead text-black">
             
            </p>
          </div>
        
        </div>
        <div class="row align-items-center justify-content-between">
          <div class="col-md-6 order-md-2">
            
          </div>
          <br>
          <div class="col-md-5 order-md-1">
            
          </div>

        </div>--> 
      </div>
    </section>
 

    <!--Div 2-->
    <section class="py-7 py-md-9 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <!--<div class="col-12 col-md-8 text-center"> -->            
                <p class="font-serif text-black mb-6" >
                  <div class="container">
                    <div class="row">
                        <div class="col-4">
                            <h3> Missão </h3>
                            Tornar a hora do cafezinho um momento de prazer e satisfação, oferecendo produtos de qualidade reconhecidos por seus clientes, fornecedores e colaboradores.
                        </div>
                        <div class="col-4">
                            <h3> Visão </h3>
                            Uma empresa que entende realmente de café, desde o plantio até o momento em que chega à xícara do consumidor.
                        </div>
                        <div class="col-4">
                            <h3> Valores </h3>
                            - Paixão pelo que fazemos;<br>
                            - Melhoria contínua;<br>
                            - Excelência;<br>
                            - Ética; <br>
                            - Responsabilidade social e ambiental.<br>
                            
                        </div>
                    </div>
                </div> 
              </p>
          </div>
        </div>
      </div>
    </section> 
  
    <!-- Div 3-->
    <section class="py-7 py-md-9">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">
             Objetivo
            </h2>

            <!-- Subheading -->
            <p class="mb-6">
             Nosso objetivo é revolucionar o ramo das cafeterias trazendo produtos diversificados. Além disso, contamos com um espaço para aluguel de livros que visa democratizar a literatura no Brasil.
            </p>
            <br>
            <br>

          </div>
        </div>
        <div class="row align-items-center justify-content-between">
          <div class="col-md-6 order-md-2">

            <!-- Image -->
            <img class="img-fluid mw-md-120 clip-top-start" src="assets/img/24.jpg" alt="...">

          </div>
          <div class="col-md-5 order-md-1">

            <!-- Text -->
            <p class="lead text-black">
             Faça uma Reserva! 
            </p>

            <!-- Text -->
            <p class="mb-6">
              Disponibilizamos a possibilidade dos clientes reservarem uma mesa na cafeteria, com um simples cadastro, eles podem adquirir os livros de forma online e rápida.
            </p>

            <!-- Botões -->
            <p class="mb-md-0">
              <div class="container">
                <div class="row">
                    <div class="col-4">
                      <a class="btn btn-outline-primary" href="contact-us.html">
                        Contatos
                      </a>
                   </div>
                   <br>
                   &emsp;
                    <div class="col-4">
                      <a class="btn btn-outline-primary" href="https://formsubmit.co/el/yijute
">
                        Reservas
                      </a>
                     </div>
          </div>
        </div>
      </div>
    </section>

  
    <footer>
    </ul>
        <ul class="menu">
                <li><a href="./principal.php">Home</a></li>
                <li><a href="./about-us.php">Sobre</a></li>
                <li><a href="./contact-us.php">Contato</a></li>
        </ul>
            <div class="footer-copyright">
                <p>Obrigado por nos visitar</p>
            </div>
    </footer>
    
          </div>
        </div>
      </div>
    </footer>
    
    
   
    <!-- TOAST 
    <div class="toast position-fixed bottom-0 start-50 translate-middle-x mb-3 mb-md-5" id="notification" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body mx-auto"></div>
      </div>
    </div>-->

    <!-- JAVASCRIPT -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>

  </body>
</html>
