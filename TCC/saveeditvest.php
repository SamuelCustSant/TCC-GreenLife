<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $idvestuario = $_POST['id'];

        $produtovest = $_POST['produtovest'];
        $precovest = $_POST['precovest'];
        $descricaovest = $_POST['descricaovest'];
        $imgvest = $_POST['imgvest'];
        $linkvest = $_POST['linkvest'];

        $sqlUpdate = "UPDATE vestuario SET produtovest= '$produtovest',precovest= '$precohig',descricaovest= '$descricaovest',imgvest= '$imgvest',linkvest= '$linkvest'
        WHERE idvestuario='$idvestuario'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: ListVest.php');

?>