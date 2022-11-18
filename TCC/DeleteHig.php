<?php
include_once ('config.php');


    if(!empty($_GET['id']))
    {
        $idalimentacao = $_GET['id'];

        $sqlSelect = "DELETE FROM higiene WHERE idhigiene=$idhigiene";

        $result = $conexao->query($sqlSelect);

        /*if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM higiene WHERE idhigiene=$idhigiene";
            $resultDelete = $conexao->query($sqlSelect);
        }*/
    }
    header('Location: ListHig.php');

?>