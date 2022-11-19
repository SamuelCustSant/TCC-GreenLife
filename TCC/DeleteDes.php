<?php
include_once ('config.php');


    if(!empty($_GET['id']))
    {
        $iddestaques = $_GET['id'];

        $sqlSelect = "DELETE FROM destaques WHERE iddestaques=$iddestaques";

        $result = $conexao->query($sqlSelect);

        /*if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM destaques WHERE iddestaques=$iddestaques";
            $resultDelete = $conexao->query($sqlSelect);
        }*/
    }
    header('Location: ListDes.php');

?>