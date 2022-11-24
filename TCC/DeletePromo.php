<?php
include_once ('config.php');


    if(!empty($_GET['id']))
    {
        $idpromocoes = $_GET['id'];

        $sqlSelect = "DELETE FROM promocoes WHERE idpromocoes=$idpromocoes";

        $result = $conexao->query($sqlSelect);

        /*if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM promocoes WHERE idpromocoes=$idpromocoes";
            $resultDelete = $conexao->query($sqlSelect);
        }*/
    }
    header('Location: ListPromo.php');

?>