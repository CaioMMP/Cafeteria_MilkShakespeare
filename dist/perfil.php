<?php
    session_start();
    
    $logado = $_SESSION['email'];

    include_once('config.php');
    $sql2 = "SELECT descricao FROM usuarios WHERE email = '$logado'";
    $result2 = $conexao->query($sql2);
    $mensagem = $result2->fetch_array();


    include_once('configlivros.php');
    $sql = "SELECT * FROM livros WHERE salvo = 1";
    $result = $conexao2->query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/perfil.css">

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

    <style>
        .box-search {
    display: flex;
    justify-content: center;
    gap: .1%;
    margin: 2px 0 0 0;
}

.p {
    margin-left: 400px;
    font-weight: 900;
}
    </style>

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
              <a class="nav-link " href="./about-us.php" style="color: black;">Sobre nós</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./menu.php" style="color: black;">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./reservation.php" style="color: black;">Reservas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./contact-us.php" style="color: black;">Contato</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./pesquisarLivros.php" style="color: black;">Lista de Livros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="./perfil.php" style="color: black;">Perfil</a>
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
    <main class="conteudo">
        <section class="sessao1">
            <div class="divisao">
                <figure class = "conteudo_img">
                    <img class = "img" id = "img" src="./src/images/user.png" alt="imagem user para perfil">
                </figure>
                <br>
                <p class="conteudo_email">
                    <?php echo "E-mail: " . $logado; ?>
                </p>
                <br>
                <form class="formulario" action="gravar.php" method="POST">
                    <label class="label" for="imagem">Sobre você:</label>
                    <div class="mensagem">
                        <?php
                            echo $mensagem['descricao'];
                        ?>
                    </div>
                    <br>
                    <center>
                    <input type="text" name="descricao" id="descricao" class="file" placeholder="Fale um pouco sobre você"> <br>
                    <br>
                    <input type="submit" value="Enviar" class="button">
                    </center>
                </form>
            </div>
        </section>

        <section class="sessao2">
            <div class="slider">
                <label class="label">
                    Livros Alugados:
                </label>

                <div>
                    <div>
                    <form action="deletarLivros.php" method="POST">
                        <p class="p">Digite o Nome do Livro que deseja deletar:</p> <br>
                        <div class="box-search">
                            <input type="search" class="form-control w-25" placeholder="Pesquisar" id="verificar2" name="verificar2">
                            <button type="submit" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                </svg>
                            </button>
                        </div>
                    </form>
                    </div>
                </div>

                <div class="slider2">
                    <?php
                        while ($user = mysqli_fetch_assoc($result)) {
                            echo 
                                "<br><br><br><br><br>" .
                                "<div class='bloco fundo'>" .
                                    "<div class='informacoes'>" .
                                        "<h2 class='nome'>" . $user['nome'] . "</h2>" .
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
                </div>
            </div>
        </section>
    </main>

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


