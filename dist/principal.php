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

    <!-- WELCOME -->
    <header data-jarallax data-speed=".8" style="background-image: url(./src/images/cafeteria.jpg);">
      <div class="d-flex flex-column min-vh-100 bg-black-50 pt-10 pt-md-8 pb-7 pb-md-0">
        <div class="container my-auto">
          <div class="row justify-content-center">
            <div class="col-12 col-md-8 col-lg-6 text-center">

              <!-- Heading -->
              <h1 class="display-1 text-white mb-4">
              
              </h1>

  

            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-md">

              <!-- Social links -->
              <ul class="list-inline text-center text-md-start mb-3 my-md-5">
                <li class="list-inline-item">
                  <a class="text-white-75 text-primary-hover" href="#!">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item ms-5">
                  <a class="text-white-75 text-primary-hover" href="#!">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item ms-5">
                  <a class="text-white-75 text-primary-hover" href="#!">
                    <i class="fab fa-instagram"></i>
                  </a>
                </li>
              </ul>

            </div>
            <div class="col-md">

              <!-- Address -->
              <p class="font-serif text-white-75 text-center text-md-end text-lg-end my-md-5">
                <i class="fas fa-map-marker-alt text-primary me-3"></i> São Pedro da Aldeia - RJ
              </p>

            </div>
          </div>
        </div>
      </div>
    </header>

    <!-- DISCOVER -->
    <section class="pt-7 pt-md-9">
      <div class="container">
        <div class="row">
          <div class="col-md-2">

            <!-- Divider -->
            <hr class="hr-sm bg-primary">

            <!-- Text -->
            <p class="fs-lg lh-lg text-black mb-5 mb-md-0">
            Nada como um café e um livro
            </p>

          </div>
          <div class="col-md-4">

            <!-- Media -->
            <div class="media-decoration media-decoration-1 mb-5 mb-md-0">

              <!-- Border -->
              <div class="media-decoration-border" data-jarallax-element="-40"></div>

              <!-- Image -->
              <img class="media-decoration-img img-fluid" src="assets/img/cafe.png" alt="...">

            </div>

          </div>
          <div class="col-md-5 align-self-center mx-auto">

            <!-- Heading -->
            <h2 class="mb-2">
              “Eu preferiria ganhar <em>café </em>do que elogios neste momento.”– Mulherzinhas, de Louisa May Alcott.
            </h2>

            <!-- Text -->
            <p class="mb-0">
              
                Um leitor vive mil vidas antes de morrer! Disse o renomado autor
                George R. R. Martin. 
                
            </p>

          </div>
        </div>
      </div>
    </section>

    <!-- DISCOVER -->
    <section class="py-7 py-md-9">
      <div class="container">
        <div class="row">
          <div class="col-md-2 order-md-2 align-self-end">

            <!-- Divider -->
            <hr class="hr-sm bg-primary">

            <!-- Text -->
            <p class="fs-lg lh-lg text-black mb-5 mb-md-0">
              “Nós <em>lemos</em> para saber que não estamos sozinhos”. – C.S Lewis
            </p>

          </div>
          <div class="col-md-4 order-md-3">

            <!-- Media -->
            <div class="media-decoration media-decoration-1 mb-5 mb-md-0">

              <!-- Solid -->
              <div class="media-decoration-solid" data-jarallax-element="-40"></div>

              <!-- Border -->
              <div class="media-decoration-border" data-jarallax-element="-40"></div>


            </div>

          </div>
          <div class="col-md-5 order-md-1 align-self-center mx-auto">

            <!-- Heading -->
            <h2 class="mb-2">
               Nada mais brasileiro
            </h2>

            <!-- Text -->
            <p class="mb-0">
              Não há nada mais brasileiro do que começar o dia com um café. O café fez parte da nossa história e é o fiel acompanhante
              ao longo do nosso dia. Por isso, aqui temos um lugar especial para aqueles que amam um bom café.
              Além disso, todos sabemos o poder que a literatura e um bom livro tem em nossas vidas. 
            </p>

          </div>
        </div>
      </div>
    </section>

    <!-- ABOUT -->
    <section data-jarallax data-speed=".8" style="background-image: url(assets/img/19.jpg);">
      <div class="min-vh-100 py-7 py-md-9 bg-gradient-bottom-end-white">
        <div class="container">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">

              <!-- Divider -->
              <hr class="hr-sm bg-primary">

              <!-- Text -->
              <p class="fs-lg lh-lg text-black mb-0">
               Seja bem vindo ao nosso ambiente virtual. Aproveite nossas opções. 
              </p>

            </div>
          </div>
        </div>
      </div>
    </section>
<br>
<br>
<br>
<center>
    <h1> A <em>leitura</em> no Brasil</h1>
    <br>
    <br>
    <h3>Uma pesquisa realizada pelo IBOPE em 2019 revelou que o Brasil perdeu 4,6 milhões de leitores nos últimos quatro anos. Entre os que mais deixaram de ler estão as classes altas da Região Sudeste. 
      Em contrapartida, as crianças são as que têm se dedicado mais à leitura nesses últimos anos.</h3>
<p>Ao observar os dados da população que lê, no Brasil, fica claro que os jovens leem com maior frequência do que as pessoas de mais idade. A faixa de 5 a 10 anos foi a única que teve um aumento em número de leitores.
 Além disso, o gosto pela leitura é também influenciado pela renda familiar, o grau de escolaridade e o lugar onde a pessoa vive. Por exemplo, quem vive na zona urbana ou pertence às classes sociais A e B ainda lê mais do que os moradores da zona rural ou os que são das classes mais baixas, D e E, mesmo que o número total tenha caído nos últimos anos.</p>
<br></center>
<br>
<br>
 
<center> <h3> Aqui na MilkShakespeare você pode alugar livros e o melhor <em>SEM CUSTO</em></h3> </center>    


    <!-- livros-->
    <section class="py-7 py-md-9 overflow-hidden">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">
              Uma prévia dos nossos <em>Livros</em>
            </h2>

            <!-- Subheading -->
            <p class="mb-6">
            Sem custo para aluguel
            </p>

          </div>
        </div>
        <div class="row">
          <div class="col-12">

            <!-- Slider -->
            <div class="flickity-viewport-visible" data-flickity='{"cellAlign": "left", "contain": true, "imagesLoaded": true, "pageDots": false}'>
              <div class="w-100 px-2" style="max-width: 320px;">

                <!-- Card -->
                <div class="card border-0">

                  <!-- Image -->
                  <img class="card-img-top" src="assets/img/mortenonilo.png" alt="..." height="450px"/>

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Heading -->
                    <div class="row mb-2">
                      <div class="col">
                        <h5 class="mb-0">Morte no Nilo</h5>
                      </div>
                      <div class="col-auto">
                        <span class="fs-4 font-serif text-black"></span>
                      </div>
                    </div>

                    <!-- Text -->
                    <p class="mb-0">
                      Death on the Nile é um romance policial de Agatha Christie, publicado em 1937. 
                      É um dos casos mais famosos do detetive Hercule Poirot e conta também com a participação do Coronel Race.
                    </p>

                  </div>

                </div>

              </div>
              <div class="w-100 px-2" style="max-width: 320px;">

                <!-- Card -->
                <div class="card border-0">

                  <!-- Image -->
                  <img class="card-img-top" src="assets/img/morrodosventos.png" alt="..." height="450px"/>

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Heading -->
                    <div class="row mb-2">
                      <div class="col">
                        <h5 class="mb-0">O morro dos ventos uivantes</h5>
                      </div>
                      <div class="col-auto">
                        <span class="fs-4 font-serif text-black"></span>
                      </div>
                    </div>

                    <!-- Text -->
                    <p class="mb-0">
                      Wuthering Heights, lançado em 1847, foi o único romance da escritora britânica Emily Brontë. Hoje considerado um clássico da literatura inglesa, recebeu fortes críticas no século XIX.
                    </p>

                  </div>

                </div>

              </div>
              <div class="w-100 px-2" style="max-width: 320px;">

                <!-- Card -->
                <div class="card border-0">

                  <!-- Image -->
                  <img class="card-img-top" src="assets/img/opequenoprincipe.png" alt="..." height="450px"/>

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Heading -->
                    <div class="row mb-2">
                      <div class="col">
                        <h5 class="mb-0">O pequeno principe</h5>
                      </div>
                      <div class="col-auto">
                        <span class="fs-4 font-serif text-black"></span>
                      </div>
                    </div>

                    <!-- Text -->
                    <p class="mb-0">
                      Le Petit Prince é uma novela do escritor, aviador aristocrata francês Antoine de Saint-Exupéry, 
                      originalmente publicada em inglês e francês em abril de 1943 nos Estados Unidos. Durante a Segunda Guerra Mundial, Saint-Exupéry foi exilado para a América do Norte.
                    </p>

                  </div>

                </div>

              </div>
              <div class="w-100 px-2" style="max-width: 320px;">

                <!-- Card -->
                <div class="card border-0">

                  <!-- Image -->
                  <img class="card-img-top" src="assets/img/memoriasp.png" alt="..." height="450px" width="600px"/>

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Heading -->
                    <div class="row mb-2">
                      <div class="col">
                        <h5 class="mb-0">Memórias Póstumas de Brás Cubas </h5>
                      </div>
                      <div class="col-auto">
                        <span class="fs-4 font-serif text-black"></span>
                      </div>
                    </div>

                    <!-- Text -->
                    <p class="mb-0">
                      Memórias Póstumas de Brás Cubas é um romance escrito por Machado de Assis, desenvolvido em princípio como folhetim, de março a dezembro de 1880, na Revista Brasileira, para, no ano seguinte, 
                      ser publicado como livro, é um romance escrito por Machado de Assis, desenvolvido em princípio como folhetim, de março a dezembro de 1880, para no ano seguinte, ser publicado como livro, pela então Tipografia Nacional como Memorias Posthumas de Braz Cubas. . 
                    </p>

                  </div>

                </div>

              </div>
              <div class="w-100 px-2" style="max-width: 320px;">

                <!-- Card -->
                <div class="card border-0">

                  <!-- Image -->
                  <img class="card-img-top" src="assets/img/admiravelmundonovo.png" alt="..." height="450px" />

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Heading -->
                    <div class="row mb-2">
                      <div class="col">
                        <h5 class="mb-0"> Admirável Mundo Novo</h5>
                      </div>
                      <div class="col-auto">
                        <span class="fs-4 font-serif text-black"></span>
                      </div>
                    </div>

                    <!-- Text -->
                    <p class="mb-0">
                      Admirável Mundo Novo é um romance escrito por Aldous Huxley e publicado em 1932. A história se passa em Londres no ano 2540, o romance antecipa desenvolvimentos em tecnologia reprodutiva, hipnopedia, manipulação psicológica e condicionamento clássico, que se combinam para mudar profundamente a sociedade.
                    </p>

                  </div>

                </div>

              </div>
              <div class="w-100 px-2" style="max-width: 320px;">

                <!-- Card -->
                <div class="card border-0">

                  <!-- Image -->
                  <img class="card-img-top" src="assets/img/assimqueacaba.png" alt="..." height="450px"/>

                  <!-- Body -->
                  <div class="card-body">

                    <!-- Heading -->
                    <div class="row mb-2">
                      <div class="col">
                        <h5 class="mb-0">É assim que acaba</h5>
                      </div>
                      <div class="col-auto">
                        <span class="fs-4 font-serif text-black"></span>
                      </div>
                    </div>

                    <!-- Text -->
                    <p class="mb-0">
                      Da autora das séries Slammed e Hopeless. Um romance sobre as escolhas corretas nas situações mais difíceis. As coisas não foram sempre fáceis para Lily, mas isso nunca a impediu de conquistar a vida tão sonhada. Ela percorreu um longo caminho desde a infância, em uma cidadezinha no Maine: se formou em marketing, mudou para Boston e abriu a própria loja. Então, quando se sente atraída por um lindo neurocirurgião chamado Ryle Kincaid, tudo parece perfeito demais para ser verdade.
                    </p>

                  </div>

                </div>

              </div>
            </div>

          </div>
        </div>
      </div>
    </section>

    <!-- RESERVATION -->
    <section class="py-7 py-md-9 bg-light" id="reservation">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">
           Faça sua reserva
            </h2>

            <!-- Subheading -->
            <p class="mb-6">
           Garanta um lugar especial para você aproveitar sozinho, com amigos ou familia.
            </p>

          </div>
        </div>
          <a style="margin-left:440px;" href="https://formsubmit.co/el/yijute">https://formsubmit.co/el/yijute</a>
        </div>
      </div>
    </section>

    
    </section>

    <!-- EVENTS -->
    <section class="pt-7 pt-md-9">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">
            Futuras Promoçoes
            </h2>

            <!-- Subheading -->
            <p class="mb-6">
              Acompanhe nossas promoções
            </p>

          </div>
        </div>
      </div>
      <div id="events">
        <div class="event">
          <div class="event-sm collapse">
            <div class="container">
              <div class="row align-items-center py-6">
                <div class="col-3 col-md-2 col-lg-1">

                  <!-- Date -->
                  <time class="d-block text-center text-black" datetime="2017-09-30">
                    <span class="d-block mb-2 display-6 font-serif">22-25</span>
                    <span>Dezembro</span>
                  </time>

                </div>
                <div class="col-9 col-md-7 col-lg-8">

                  <!-- Heading -->
                  <div class="h4 mb-4 mb-md-0" data-bs-toggle="collapse" data-bs-target="#eventOne" aria-controls="eventOne" role="button">
                  Promoção de natal
                  </div>

                </div>
                <div class="col-9 offset-3 col-md-3 offset-md-0 text-md-right">

                  <!-- Button -->
                  <a class="btn btn-outline-primary" href="./reservation.php">
                    Reserve uma mesa
                  </a>

                </div>
              </div>
            </div>
          </div>
          <div class="event-lg collapse show bg-cover" id="eventOne" data-bs-parent="#events" style="background-image: url(assets/img/8.jpg);">
            <div class="bg-black-50">
              <div class="container">
                <div class="row py-10">
                  <div class="col-md-8 col-lg-5">

                    <!-- Date -->
                    <h3 class="text-xs text-primary">
                      <time datetime="2017-09-30">22-25 de Dezembro</time>
                    </h3>

                    <!-- Heading -->
                    <h2 class="mb-3 text-white">
                     Promoção de natal
                    </h2>

                    <!-- Description -->
                    <p class="mb-6 text-white-75">
                     Comidas típicas natalinas como rabanada, pudim, chocolate quente e biscoitos natalinos pela metade do preço!! Reserve uma mesa para aproveitar a promoção.
                    </p>

                    <!-- Button -->
                    <a class="btn btn-outline-primary text-white text-primary-hover" href="./reservation.php">
                  Reserve uma mesa
                    </a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="event">
          <div class="event-sm collapse show">
            <div class="container border-top">
              <div class="row align-items-center py-6">
                <div class="col-3 col-md-2 col-lg-1">

                  <!-- Date -->
                  <time class="d-block text-center text-black" datetime="2017-09-29">
                    <span class="d-block mb-2 display-6 font-serif">22</span>
                    <span>Dezembro</span>
                  </time>

                </div>
                <div class="col-9 col-md-7 col-lg-8">

                  <!-- Heading -->
                  <div class="h4 mb-4 mb-md-0" data-bs-toggle="collapse" data-bs-target="#eventTwo" aria-controls="eventTwo" role="button">
                    Metade do preço em doces
                  </div>

                  </div>
                  <div class="col-9 offset-3 col-md-3 offset-md-0 text-md-right">

                  <!-- Button -->
                  <a class="btn btn-outline-primary" href="./reservation.php">
                    Reserve 
                  </a>

                </div>
              </div>
            </div>
          </div>
          <div class="event-lg collapse bg-cover" id="eventTwo" data-bs-parent="#events" style="background-image: url(assets/img/9.jpg);">
            <div class="bg-black-50">
              <div class="container">
                <div class="row py-10">
                  <div class="col-md-8 col-lg-5">

                    <!-- Date -->
                    <h3 class="text-xs text-primary">
                      <time datetime="2017-09-29">September 29, 2017</time>
                    </h3>

                    <!-- Heading -->
                    <h2 class="mb-3 text-white">
                  
                    </h2>

                    <!-- Description -->
                    <p class="mb-6 text-white-75">
                    
                    </p>

                    <!-- Button -->
                    <a class="btn btn-outline-primary text-white text-primary-hover" href="./reservation.php">
                      Reserve uma mesa
                    </a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="event">
          <div class="event-sm collapse show">
            <div class="container border-top">
              <div class="row align-items-center py-6">
                <div class="col-3 col-md-2 col-lg-1">

                  <!-- Date -->
                  <time class="d-block text-center text-black" datetime="2017-09-28">
                    <span class="d-block mb-2 display-6 font-serif">23</span>
                    <span>Dezembro</span>
                  </time>

                </div>
                <div class="col-9 col-md-7 col-lg-8">

                  <!-- Heading -->
                  <div class="h4 mb-4 mb-md-0" data-bs-toggle="collapse" data-bs-target="#eventThree" aria-controls="eventThree" role="button">
                    Metade do preço em salgados
                  </div>

                </div>
                <div class="col-9 offset-3 col-md-3 offset-md-0 text-md-right">

                  <!-- Button -->
                  <a class="btn btn-outline-primary" href="./reservation.php">
                    Reserve
                  </a>

                </div>
              </div>
            </div>
          </div>
          <div class="event-lg collapse bg-cover" id="eventThree" data-bs-parent="#events" style="background-image: url(assets/img/10.jpg);">
            <div class="bg-black-50">
              <div class="container">
                <div class="row py-10">
                  <div class="col-md-8 col-lg-5">

                    <!-- Date -->
                    <h3 class="text-xs text-primary">
                      <time datetime="2017-09-28">September 28, 2017</time>
                    </h3>

                    <!-- Heading -->
                    <h2 class="mb-3 text-white">
                      
                    </h2>

                    <!-- Description -->
                    <p class="mb-6 text-white-75">
                      
                    </p>

                    <!-- Button -->
                    <a class="btn btn-outline-primary text-white text-primary-hover" href="./reservation.php">
                      Reserve uma mesa
                    </a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Nomes -->
    <section class="py-7 py-md-9 bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">
              Nosso diferencial
            </h2>

            <!-- Subheading -->
            <p class="mb-6">
             Aqui na MilkShakespeare nossos produtos são personalizados com o nome dos autores que mais amamos! Além de contarmos com várias opções com nomes de livros e personagens da nossa literatura e da literatura estrangeira.
            </p>

          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-6">


          </div>
        </div>
      </div>
    </section>

    <!-- GALLERY -->
    <section class=" py-7 py-md-9">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-md-8 col-lg-6 text-center">

            <!-- Heading -->
            <h2 class="mb-2">
              Nossos produtos
            </h2>

            <!-- Subheading -->
            <p class=" mb-6">
        Algumas das nossas especialidades 
            </p>

          </div>
        </div>
        <div class="row gx-3" data-isotope>
        
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "assets/img/16.jpg" }'>
              <img class="img-fluid" src="assets/img/cafe2.png" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "assets/img/13.jpg" }'>
              <img class="img-fluid" src="assets/img/bolo.png" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "assets/img/15.jpg" }'>
              <img class="img-fluid" src="assets/img/pão.png" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">

            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "assets/img/14.jpg" }'>
              <img class="img-fluid" src="assets/img/torta.png" alt="...">
            </a>

          </div>
          <div class="col-6 col-sm-6 col-md-4">
            
            <!-- Item -->
            <a class="d-block mb-3" href="#" data-bigpicture='{ "imgSrc": "assets/img/18.jpg" }'>
              <img class="img-fluid" src="assets/img/mojito.png" alt="...">
            </a>
          </div>

          </div>
          <div class="col-6 col-sm-6 col-md-4">
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
