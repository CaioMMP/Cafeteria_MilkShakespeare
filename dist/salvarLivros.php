<?php
    session_start();

    include_once('configlivros.php');
    $nome = $_POST['verificar'];
    $sql = "UPDATE livros SET salvo = 1 WHERE nome = '$nome'";
    $result = $conexao2->query($sql);
    header('Location: pesquisarLivros.php');
?>