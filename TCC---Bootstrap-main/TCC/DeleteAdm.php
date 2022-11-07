<?php
include_once ('config.php');

    if(!empty($_GET['idadm']))
    {

        $idalimentacao = $_GET['idadm'];

        $sqlSelect = "SELECT * FROM adm WHERE idadm=$idadm";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0)
        {
            $sqlDelete = "DELETE FROM adm WHERE idadm=$idadm";
            $resultDelete = $conexao->query($sqlSelect);
        }
    }
    header('Location: ListAdm.php');

?>