<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $iddestaques = $_POST['iddestaques'];
        $produtodes = $_POST['produtodes'];
        $precodes = $_POST['precodes'];
        $descricaodes = $_POST['descricaodes'];
        $imgdes = $_POST['imgdes'];
        $linkdes = $_POST['linkdes'];

        $sqlUpdate = "UPDATE destaques SET produtodes= '$produtodes',precodes= '$precodes',descricaodes= '$descricaodes',imgdes= '$imgdes',linkdes= '$linkdes'
        WHERE iddestaques='$iddestaques'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: ListDes.php');

?>