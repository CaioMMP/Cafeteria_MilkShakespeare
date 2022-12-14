<?php
    session_start();
    include_once('config.php');
    
    $email = $_SESSION['email'];
    $descricao = $_POST["descricao"];
    $sql = "UPDATE usuarios SET descricao = '$descricao' WHERE email = '$email'";
    $result = $conexao->query($sql);

    header('Location: perfil.php');

?>