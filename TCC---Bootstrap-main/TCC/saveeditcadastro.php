<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $idclientes = $_POST['idclientes'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sqlUpdate = "UPDATE clientes SET nome= '$nome',email= '$email',senha= '$senha'
        WHERE idclientes='$idclientes'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: ListCadastro.php');

?>