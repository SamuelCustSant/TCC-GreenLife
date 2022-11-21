<?php
include_once ('config.php');


    if(!empty($_GET['id']))
    {
        $idcosmeticos = $_GET['id'];

        $sqlSelect = "DELETE FROM cosmeticos WHERE idcosmeticos=$idcosmeticos";

        $result = $conexao->query($sqlSelect);

        /*if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cosmeticos WHERE idcosmeticos=$idcosmeticos";
            $resultDelete = $conexao->query($sqlSelect);
        }*/
    }
    header('Location: ListCos.php');

?>