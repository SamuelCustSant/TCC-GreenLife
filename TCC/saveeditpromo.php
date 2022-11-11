<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $idpromocoes = $_POST['idpromocoes'];
        $produtopromo = $_POST['produtopromo'];
        $precoanterior = $_POST['precoanterior'];
        $precoatual = $_POST['precoatual'];
        $descricaopromo = $_POST['descricaopromo'];
        $imgpromo = $_POST['imgpromo'];
        $linkpromo = $_POST['linkpromo'];

        $sqlUpdate = "UPDATE promocoes SET produtopromo= '$produtopromo',precoanterior= '$precoanterior',precoatual= '$precoatual',descricaopromo= '$descricaopromo',imgpromo= '$imgpromo',linkpromo= '$linkpromo'
        WHERE idpromocoes='$idpromocoes'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: ListPromo.php');

?>