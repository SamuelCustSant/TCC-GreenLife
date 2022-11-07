<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $idhigiene = $_POST['idhigiene'];
        $produtohig = $_POST['produtohig'];
        $precohig = $_POST['precohig'];
        $descricaohig = $_POST['descricaohig'];
        $imghig = $_POST['imghig'];
        $linkhig = $_POST['linkhig'];

        $sqlUpdate = "UPDATE higiene SET produtohig= '$produtohig',precohig= '$precohig',descricaohig= '$descricaohig',imghig= '$imghig',linkhig= '$linkhig'
        WHERE idhigiene='$idhigiene'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: ListHig.php');

?>