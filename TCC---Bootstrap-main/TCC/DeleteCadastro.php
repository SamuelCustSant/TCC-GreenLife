<?php

    if(!empty[$_GET['idclientes']])
    {
        include_once ('config.php');

        $idalimentacao = $_GET['idclientes'];

        $sqlSelect = "SELECT * FROM clientes WHERE idclientes=$idclientes";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM clientes WHERE idclientes=$idclientes";
            $resultDelete = $conexao->query($sqlSelect);
        }
    }
    header('Location: ListCadastro.php');

?>