<?php

    include_once('config.php');

    if(isset($_POST['update']))
    {
        $idalimentacao = $_POST['idalimentacao'];
        $produtoali = $_POST['produtoali'];
        $precoali = $_POST['precoali'];
        $descricaoali = $_POST['descricaoali'];
        $imgali = $_POST['imgali'];
        $linkali = $_POST['linkali'];

        $sqlUpdate = "UPDATE alimentacao SET produtoali= '$produtoali',precoali= '$precoali',descricaoali= '$descricaoali',imgali= '$imgali',linkali= '$linkali'
        WHERE idalimentacao='$idalimentacao'";

        $result = $conexao->query($sqlUpdate);
    }
    header('Location: ListAli.php');

?>