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
    <header data-jarallax data-speed=".8" style="background-image: url(assets/img/coffee.gif);">
      <div class="pt-10 pb-8 pt-md-15 pb-md-13 bg-black-50">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">

              <!-- Heading -->
              <h1 class="display-6 fw-bold text-white">
                Cardápio 
              </h1>

            </div>
          </div>
        </div>
      </div>
    </header>
<br>
<br>

    <center>
      <div class="lado">
    <h1>Somos para todos os momentos!  <br>
    <br>Opções de café da manhã, livros e cafés<br></h1>
    </center>
    </div>

    <!-- MENU -->
    <section class="py-7 py-md-9 border-bottom">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">
            Procure de acordo com sua fome
            </h2>

            <!-- Subheading -->
            <p class="mb-6">
             Aproveite
            </p>

          </div>
        </div>
        <div class="row">
          <div class="col">

            <!-- Navigation -->
            <div class="nav justify-content-center mb-6" id="menuTabs" role="tablist">
              <a class="nav-link active" id="mainsTab" data-bs-toggle="tab" href="#mains" role="tab" aria-controls="mains" aria-selected="true">
               Cafés
              </a>
              <a class="nav-link" id="lunchTab" data-bs-toggle="tab" href="#lunch" role="tab" aria-controls="lunch">
               Bolos/tortas
              </a>
              <a class="nav-link" id="dinnerTab" data-bs-toggle="tab" href="#dinner" role="tab" aria-controls="dinner">
                Drinks
              </a>
              <a class="nav-link" id="drinksTab" data-bs-toggle="tab" href="#drinks" role="tab" aria-controls="drinks">
                Salgados
              </a>
            </div>

          </div>
        </div>
        <div class="row">
          <div class="col-12">

            <!-- Content -->
            <div class="tab-content" id="menuContent">
              <div class="tab-pane fade show active" id="mains" role="tabpanel" aria-labelledby="mainsTab">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/cafepreto.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Café Clarice Lispector</h5>

                          <!-- Text -->
                          <p class="mb-0">
                           Café preto. 
                           150-250-500ML
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $4
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/Cappuccino.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Cappuccino Jojo Moyes</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Feito especialmente para os fans de romance. 
                            Chocolate, canela, leite, café, chantili.
                            -Opções sem lactose.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $9
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/cafecomleite.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Café com leite Cora Coralina</h5>

                          <!-- Text -->
                          <p class="mb-0">
                           Um café bem brasileiro para os leitores de poesia. 
                           150-250-500ML
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $6
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/chá.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Chá Julia Quinn</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Feito especialmente para os leitores de romance de época. 
                            Sabores podem ser escolhidos no caixa.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $4
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/chocolate.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Chocolate Quente L. M. Montgomery</h5>

                          <!-- Text -->
                          <p class="mb-0">
                           Para os amantes de choclate quente assim como a personagem Anne.
                           Canela e chantili são opcionais.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $6
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/cafeexpresso.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2"> Café William Shakespeare</h5>

                          <!-- Text -->
                          <p class="mb-0">
                           Café expresso.
                           O queridinho do nosso café!! 
                           100 ML
                           200 ML
                           300ML
                           Comprando dois cafés você ganha um Shakespeare. 
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $6
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="lunch" role="tabpanel" aria-labelledby="lunchTab">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/galaxia.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Bolo Stephen hawking</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            O bolo gálaxia mais gostoso de toda milky way! <br>
                            Bolo de frutas recheado com brigadeiro branco e frutas vermelhas. Sua massa é feita com castanhas e vem em cores galáxia.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $10
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/tortam.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Torta John Green</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Uma torta de morango para todos os amantes de romance. Torta de leite condensado com coco.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $9
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/bolochoc.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Bolo Emily Bronte</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Bolo de chocolate meio amargo 100% cacau. Feito especialmente para os fâs de romance gótico.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $9
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/bolog.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Bolo Machado de Assis</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Bolo branco reachado com goiabada e queijo, um pedido para todos os que apreciam a literatura brasileira.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $10
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/tortamaracuja.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Torta Tolkien</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Torta de moracuja com licor feito para todos que amam uma alta fantasia.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $10
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/bolomor.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Bolo George R. R. Martin</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Bolo de chocolate meio amargo trufado com licor de uvas roxas. Para quem adora uma guerra dos tronos.
                            Opções com ou sem álcool.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $11
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="dinner" role="tabpanel" aria-labelledby="dinnerTab">
                <div class="row">
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/gin.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">O morro dos ventos uivantes</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Gin tônica com carvão ativado 
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $18
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/pina.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2"> Moby Dick</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Piña Colada
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $22
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/cosmopolitan.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Alice no país das Maravilhas</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Cosmopolitan
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $30
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/caipirinha.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">O cortiço</h5>
a
                          <!-- Text -->
                          <p class="mb-0">
                            Caipirinha
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $28
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/bloody.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2"> Drácula</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Bloody Mary
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $35
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/mojito.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Uma farsa de amor na Espanha</h5>

                          <!-- Text -->
                          <p class="mb-0">
                           Mojito
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $30
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="drinks" role="tabpanel" aria-labelledby="drinksTab">
                <div class="row">

                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/sanduba.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Sherlock Holmes</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Um sanduba feito com frango,creme de ricota e temperos. Perfeito para matar sua fome enquanto você investiga quem matou o suspeito!
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $14
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/croissantg.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Romeu e Julieta</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Croissant recheado com queijo e goiabada.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $10
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/quichef.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Elizabeth Bennet</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            É uma verdade universalmente conhecida que todos gostam de quiche de frango.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $9
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/coxinha.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2"> Capitu</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Coxinha de frango com "capitupiri". Nada é mais brasileiro que uma coxinha.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $7
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/croissant.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Harry Potter</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Croissant de peito de peru. Feito para quem ama uma magia.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $9
                          </div>

                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <div class="py-3 border-bottom">
                      <div class="row">
                        <div class="col-3 align-self-center">

                          <!-- Image -->
                          <div class="ratio ratio-1x1">
                            <img class="object-fit-cover" src="assets/img/quichel.png" alt="...">
                          </div>

                        </div>
                        <div class="col-7">

                          <!-- Heading -->
                          <h5 class="mb-2">Anne de Green Gables</h5>

                          <!-- Text -->
                          <p class="mb-0">
                            Quiche de legumes e alho poró. Para quem ama a simplicidade da comida.
                          </p>

                        </div>
                        <div class="col-2">

                          <!-- Price -->
                          <div class="fs-4 font-serif text-center text-black">
                            $8
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
      </div>
    </section>



    <!-- RESERVATION -->
    <section class="py-7 py-md-9 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">
            Faça sua reserva
            </h2>

            <!-- Subheading -->
            <p class="mb-6">
              Garanta um lugar especial para você
            </p>

          </div>
        </div>
          <div>
            <a style="margin-left:440px;" href="https://formsubmit.co/el/yijute">https://formsubmit.co/el/yijute</a>
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

    
    
    <!--  -->
    <!-- TOAST -->
    <div class="toast position-fixed bottom-0 start-50 translate-middle-x mb-3 mb-md-5" id="notification" role="alert" aria-live="assertive" aria-atomic="true">
      <div class="d-flex">
        <div class="toast-body mx-auto"></div>
      </div>
    </div>

    <!-- JAVASCRIPT -->
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>

  </body>
</html>
