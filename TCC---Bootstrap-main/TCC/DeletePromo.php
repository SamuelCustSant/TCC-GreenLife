<?php

    if(!empty[$_GET['idpromocoes']])
    {
        include_once ('config.php');

        $idalimentacao = $_GET['idpromocoes'];

        $sqlSelect = "SELECT * FROM promocoes WHERE idpromocoes=$idpromocoes";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM promocoes WHERE idpromocoes=$idpromocoes";
            $resultDelete = $conexao->query($sqlSelect);
        }
    }
    header('Location: ListPromo.php');

?>