<?php
    session_start();

    include_once('configlivros.php');
    $nome = $_POST['verificar2'];
    $sql = "UPDATE livros SET salvo = 0 WHERE nome = '$nome'";
    $result = $conexao2->query($sql);
    header('Location: perfil.php');
?>