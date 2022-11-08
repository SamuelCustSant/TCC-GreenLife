<?php

    if(!empty($_GET['iddestaques']))
    {
        include_once ('config.php');

        $idalimentacao = $_GET['iddestaques'];

        $sqlSelect = "SELECT * FROM destaques WHERE iddestaques=$iddestaques";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM destaques WHERE iddestaques=$iddestaques";
            $resultDelete = $conexao->query($sqlSelect);
        }
    }
    header('Location: ListDes.php');

?>