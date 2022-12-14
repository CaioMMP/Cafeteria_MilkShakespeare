<?php
    session_start();

    if (isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['password'])) {
        // Se o if for verdadeiro, acessará a conta
        include_once('config.php');
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' and senha = md5('$password')";
        $result = $conexao->query($sql);

        if (mysqli_num_rows($result) < 1) {
            unset($_SESSION['email']);
            unset($_SESSION['password']);
            header('Location: login.php');
        } else {
            $_SESSION['email'] = $email;
            $_SESSION['password'] = $password;
            header('Location: principal.php');
        }
    } else {
        // Se o if for falso, não acessará a conta e retornará ao login.php
        header('Location: login.php');
    }
?>