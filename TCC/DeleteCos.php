<?php

    if(!empty[$_GET['idcosmeticos']])
    {
        include_once ('config.php');

        $idalimentacao = $_GET['idcosmeticos'];

        $sqlSelect = "SELECT * FROM cosmeticos WHERE idcosmeticos=$idcosmeticos";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM cosmeticos WHERE idcosmeticos=$idcosmeticos";
            $resultDelete = $conexao->query($sqlSelect);
        }
    }
    header('Location: ListCos.php');

?>