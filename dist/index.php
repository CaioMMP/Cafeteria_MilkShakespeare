<?php
  include('config.php');
  session_start();

  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];

    if (($username == "") || ($email == "") || ($password == "") || ($confirmPassword == "")) {
      $flso = false;
    } else if (filter_var( $email, FILTER_VALIDATE_EMAIL) === false) {
      $flso = false;
    } else if (mb_strlen($username) < 4) {
      $flso = false;
    } else if ($password != $confirmPassword) {
      $flso = false;
    } else {
      $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, email, senha, confirmsenha) VALUES ('$username', '$email', md5('$password'), md5('$confirmPassword'))");
      header('Location: login.php');
    }
  }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

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

  <link rel="stylesheet" href="./src/css/style.css">
  <title>MilkShakespeare</title>

</head>
<body>
  <script src="./src/js/script.js" defer></script>

  <main>
    <form action="index.php" method="POST">

      <section class="login">

        <div class="wrapper">
          <img src="./src/images/logo.gif" class="login__logo">

          <h1 class="login__title">Fazer Cadastro</h1>

          <label class="login__label">
            <span>nome de usuário</span>
            <input type="text" name="username" id="username" class="input" required>
          </label>

          <label class="login__label">
            <span>e-mail</span>
            <input type="text" name="email" id="email" class="input" required>
          </label>
    
          <label class="login__label">
            <span>senha</span>
            <input type="password" name="password" id="password" class="input" required>
          </label>

          <label class="login__label">
            <span>confirme senha</span>
            <input type="password" name="confirmPassword" id="confirmPassword" class="input" required>
          </label>
    
          <div class="login__icons">
            <button type="button" class="icons__button">
              <img src="./src/images/facebook-icon.png" alt="facebok">
            </button>
    
            <button type="button" class="icons__button">
              <img src="./src/images/google-icon.png" alt="facebok">
            </button>
    
            <button type="button" class="icons__button">
              <img src="./src/images/apple-icon.png" alt="facebok">
            </button>
          </div>
    
          <label class="login__label--checkbox">
            <input id="mostrarSenha" onclick="Mostrar()" type="checkbox" class="input--checkbox">
            Mostrar Senha
          </label>
        </div>

        <div class="wrapper">
          <button type="submit" class="login__button" name="submit" onclick="btnFunction()" id="submit">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <path d="M438.6 278.6l-160 160C272.4 444.9 264.2 448 256 448s-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L338.8 288H32C14.33 288 .0016 273.7 .0016 256S14.33 224 32 224h306.8l-105.4-105.4c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l160 160C451.1 245.9 451.1 266.1 438.6 278.6z"/>
            </svg>
          </button>
          
          <a href="login.php" class="login__link">já tem uma conta?</a>
          <a href="login.php" class="login__link">faça login</a>
        </div>

      </section>
    </form>

    <section class="wallpaper"></section>
  </main>
  
</body>
</html>