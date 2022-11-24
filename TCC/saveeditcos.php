<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $idcosmeticos = $_POST['id'];

        $produtocos = $_POST['produtocos'];
        $precocos = $_POST['precocos'];
        $descricaocos = $_POST['descricaocos'];
        $imgcos = $_POST['imgcos'];
        $linkcos = $_POST['linkcos'];

        $sqlUpdate = "UPDATE cosmeticos SET produtocos= '$produtocos',precocos= '$precocos',descricaocos= '$descricaocos',imgcos= '$imgcos',linkcos= '$linkcos'
        WHERE idcosmeticos='$idcosmeticos'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: ListCos.php');

?>