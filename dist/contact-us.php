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

    <!-- Div 1 -->
    <header data-jarallax data-speed=".8" style="background-image: url(assets/img/cafeelivro.jpg);">
      <div class="pt-10 pb-8 pt-md-15 pb-md-13 bg-black-50">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">

              <!-- Heading -->
              <h1 class="display-6 fw-bold text-white">
                Contatos
              </h1>

            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- Div 2 -->
    <section class="py-7 py-md-9">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-10 text-center">

            <!-- Heading -->
            <h2 class="mb-2" style="font-size: 50px;">
              Entre em contato conosco!
            </h2>
        <br>
        <br>
          </div>
        </div>
        <center>
        <div class="row" style="font-size: 30px;">
          <!--<div class="col-md-3 order-md-2">-->

            <!-- Heading -->
            <h4 class="mb-2">
              Email:
            </h4>

            <!-- Text -->
            <p class="mb-4 font-serif">
              <a href="cafeteria.milkshakespeare@gmail.com">cafeteria.milkshakespeare@gmail.com</a>
            </p>

            <!-- Heading -->
            <h4 class="mb-2">
              Telefone:
            </h4>

            <!-- Text -->
            <p class="mb-4 font-serif">
              <a href="tel:+5522988253837">+55 22 98825-3837</a>
            </p>

            <!-- Heading -->
            <h4 class="mb-2">
              Endereço:
            </h4>

            <!-- Text -->
            <p class="mb-4 font-serif">
              Rua Francisco Dos Santos Silva, São Pedro da Aldeia - RJ
            </p>

            <!-- Heading -->
            <h4 class="mb-2">
              Social links
            </h4>

            <!-- List -->
            <div class="d-flex mb-6 mb-md-0 font-serif">
              <a class="d-block me-3" href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a class="d-block me-3" href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a class="d-block" href="#">
                <i class="fab fa-instagram"></i>
              </a>
            </div>

          </div>
          <div class="col-md-9 order-md-1">

            <!-- Form 
            <form class="block-decoration-2" id="contactForm">

              
              <input type="hidden" name="contact_number">

               
              <div class="mb-3">
                <label class="visually-hidden" for="user_name">Full name</label>
                <input class="form-control" id="user_name" name="user_name" type="text" placeholder="Full name" required />
              </div>

               
              <div class="mb-3">
                <label class="visually-hidden" for="user_email">E-mail address</label>
                <input class="form-control" id="user_email" name="user_email" type="email" placeholder="E-mail address" required />
              </div>

               
              <div class="mb-3">
                <label class="visually-hidden" for="message">Message</label>
                <textarea class="form-control" id="message" name="message" rows="9" placeholder="Message" required></textarea>
              </div>

               
              <button class="btn btn-outline-primary" type="submit">
                Send message
              </button> 

            </form> -->

          </div>
        </div>
        </center>
      </div>
    </section>
    
    
            <footer>
                <ul class="menu">
                    <li><a href="./principal.php">Home</a></li>
                    <li><a href="./about-us.php">Sobre</a></li>
                    <li><a href="./contact-us.php">Contato</a></li>
                </ul>
                    <div class="footer-copyright">
                        <p>Obrigado por nos visitar</p>
                    </div>
            </footer>
  
    <!-- JAVASCRIPT -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>

  </body>
</html>