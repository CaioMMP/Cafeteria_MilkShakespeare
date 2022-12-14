<?php
    session_start();
    include_once('config.php');

    if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['password']) == true)) {
        unset($_SESSION['email']);
        unset($_SESSION['password']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

    include_once('configlivros.php');

    if (!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT * FROM livros WHERE nome LIKE '%$data%' or genero LIKE '%$data%' or autor LIKE '%$data%' or ano LIKE '%$data%' or paginas LIKE '%$data%' ORDER BY id ASC";
    } else {
        $sql = "SELECT * FROM livros WHERE salvo = 0 ORDER BY nome ASC";
    }
    $result = $conexao2->query($sql);
    
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/pesquisa.css">

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

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <title>MilkShakespeare</title>

</head>
<body class="body">
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

    <br>
    <br>

    <div class="box-search">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar">
        <button onclick="searchData()" class="btn btn-primary">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>

    <main class="slider">

        <!-- Blocos dos Livros -->
        <?php
            while($user = mysqli_fetch_assoc($result)) {
                echo 
                "<div class='bloco fundo'>" .
                    "<div class='informacoes'>" .
                        "<h2 type='text' class='nome' name='nome' id='nome'>" . $user['nome'] . "</h2>" .
                        "<p class='autor'>" . $user['autor'] . "</p>" .
                    "</div>" .

                    "<div class='cointainer_img'>" .
                        "<img src='./src/images/" . $user['img'] . "' alt='". $user['nome'] . "' class='img_livro'>" .
                    "</div>" .

                    "<div class='informacoes2'>" .
                        "<h3 class='titulo'>Informações:</h3>" .
                        "<p class='texto'>" . "<center>" . "Gênero: " . $user['genero'] . "<br>" . "Ano: " . $user['ano'] . "<br>" . "Páginas: " . $user['paginas'] . "</center>" . "</p>" .
                    "</div>" .
                "</div>";
            }
            ?>
    </main>

    <br>
    <br>

    <section>
        <div>
          <form action="salvarLivros.php" method="POST">
            <p class="p">Digite o Nome do Livro que deseja alugar:</p> <br>
            <div class="box-search">
              <input type="search" class="form-control w-25" placeholder="Pesquisar" id="verificar" name="verificar">
              <button type="submit" class="btn btn-primary">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
              </svg>
              </button>
            </div>
          </form>
        </div>
    </section>
                
    <script> 
        var search = document.getElementById("pesquisar");

        search.addEventListener("keydown", function(event) {
            if (event.key === "Enter") {
                searchData();
            };
        });

        function searchData() {
            window.location = "pesquisarLivros.php?search=" + search.value;
        };

        function Sumir() {

        }
    </script>
    <br>
    <br>

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