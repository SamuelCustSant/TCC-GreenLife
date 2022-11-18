<?php
include_once ('config.php');


    if(!empty($_GET['id']))
    {
        $idalimentacao = $_GET['id'];

        $sqlSelect = "DELETE FROM alimentacao WHERE idalimentacao=$idalimentacao";

        $result = $conexao->query($sqlSelect);

        /*if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM alimentacao WHERE idalimentacao=$idalimentacao";
            $resultDelete = $conexao->query($sqlSelect);
        }*/
        
    }
    header('Location: ListAli.php');

?>