<?php

    if(!empty($_GET['idalimentacao']))
    {
        include_once ('config.php');

        $idalimentacao = $_GET['idalimentacao'];

        $sqlSelect = "SELECT * FROM alimentacao WHERE idalimentacao=$idalimentacao";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM alimentacao WHERE idalimentacao=$idalimentacao";
            $resultDelete = $conexao->query($sqlSelect);
        }
    }
    header('Location: ListAli.php');

?>