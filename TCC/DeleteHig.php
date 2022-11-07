<?php

    if(!empty[$_GET['idhigiene']])
    {
        include_once ('config.php');

        $idalimentacao = $_GET['idhigiene'];

        $sqlSelect = "SELECT * FROM higiene WHERE idhigiene=$idhigiene";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM higiene WHERE idhigiene=$idhigiene";
            $resultDelete = $conexao->query($sqlSelect);
        }
    }
    header('Location: ListHig.php');

?>